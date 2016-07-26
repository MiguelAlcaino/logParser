<?php

namespace AppBundle\Command;

use AppBundle\Entity\Eventdata;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class LogParserCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('gts:parse')
            ->setDescription('Parses last line of a file into the database');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $process = new Process("tail -n 1 ".$this->getContainer()->getParameter('log_file'));
        $process->run();

// executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $output->writeln($process->getOutput());
        list($ip, $imei, $evento, $puertos, $date,$time,$gpsStatus,$lat,$lon,$velocidad,$altitud,$satelites)=sscanf($process->getOutput(),"nuevo mensaje desde: %s       %s  Evento: %d Puertos: %d Date: %s %s GPSStatus: %d Lat: %f Lon: %f Velocidad: %d Altitud: %d Satelites: %d");

        $output->writeln($ip);
        $output->writeln($imei);
        $output->writeln($evento);
        $output->writeln($lat);
        $output->writeln($lon);

        /** @var EntityManager $manager */
        $manager = $this->getContainer()->get('doctrine')->getManager();

        $device = $manager->getRepository('AppBundle:Device')->findOneBy(array(
            'deviceid' => $imei
        ));

        $eventData = new Eventdata();
        $eventData->setAccountid($device->getAccountid())
            ->setDeviceid($device->getDeviceid())
            ->setLatitude($lat)
            ->setLongitude($lon)
            ->setSpeedkph($velocidad)
            ->setHeading($satelites)
            ->setAltitude($altitud)
            ->setTimestamp(time())
            ->setStatuscode($gpsStatus)
        ;

        $manager->persist($eventData);
        $manager->flush();
        $output->writeln("Data has been persisted correctly");
    }
}
