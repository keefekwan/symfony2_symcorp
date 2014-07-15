<?php
// src/Sym/CorpBundle/DataFixtures/ORM/LoadCategories.php

namespace Sym\CorpBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sym\CorpBundle\Entity\Team;

class LoadTeams extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $team1 = new Team();
        $team1->setName('Foo1');
        $team1->setTitle('President and Chief Executive Officer');
        $team1->setDescription('Zombie ipsum reversus ab viral inferno, nam rick grimes malum cerebro. De carne lumbering animata corpora quaeritis. Summus brains sit​​, morbo vel maleficia? De apocalypsi gorger omero undead survivor dictum mauris. Hi mindless mortuis soulless creaturas, imo evil stalking monstra adventus resi dentevil vultus comedat cerebella viventium. Qui animated corpse, cricket bat max brucks terribilem incessu zomby. The voodoo sacerdos flesh eater, suscitat mortuos comedere carnem virus. Zonbi tattered for solum oculi eorum defunctis go lum cerebro. Nescio brains an Undead zombies. Sicut malus putrid voodoo horror. Nigh tofth eliv ingdead.

');
        $team1->setCreated(new \DateTime());
        $team1->setUpdated($team1->getCreated());
        $manager->persist($team1);

        $team2 = new Team();
        $team2->setName('Foo2');
        $team2->setTitle('Chief Financial Officer');
        $team2->setDescription('Cum horribilem walking dead resurgere de crazed sepulcris creaturis, zombie sicut de grave feeding iride et serpens. Pestilentia, shaun ofthe dead scythe animated corpses ipsa screams. Pestilentia est plague haec decaying ambulabat mortuos. Sicut zeder apathetic malus voodoo. Aenean a dolor plan et terror soulless vulnerum contagium accedunt, mortui iam vivam unlife. Qui tardius moveri, brid eof reanimator sed in magna copia sint terribiles undeath legionis. Alii missing oculis aliorum sicut serpere crabs nostram. Putridi braindead odores kill and infect, aere implent left four dead.');
        $team2->setCreated(new \DateTime());
        $team2->setUpdated($team2->getCreated());
        $manager->persist($team2);

        $team3 = new Team();
        $team3->setName('Foo3');
        $team3->setTitle('Global Operations');
        $team3->setDescription('Lucio fulci tremor est dark vivos magna. Expansis creepy arm yof darkness ulnis witchcraft missing carnem armis Kirkman Moore and Adlard caeruleum in locis. Romero morbo Congress amarus in auras. Nihil horum sagittis tincidunt, zombie slack-jawed gelida survival portenta. The unleashed virus est, et iam zombie mortui ambulabunt super terram. Souless mortuum glassy-eyed oculos attonitos indifferent back zom bieapoc alypse. An hoc dead snow braaaiiiins sociopathic incipere Clairvius Narcisse, an ante? Is bello mundi z?');
        $team3->setCreated(new \DateTime());
        $team3->setUpdated($team3->getCreated());
        $manager->persist($team3);

        $team4 = new Team();
        $team4->setName('Foo4');
        $team4->setTitle('Global Resources');
        $team4->setDescription('In Craven omni memoria patriae zombieland clairvius narcisse religionis sunt diri undead historiarum. Golums, zombies unrelenting et Raimi fascinati beheading. Maleficia! Vel cemetery man a modern bursting eyeballs perhsaps morbi. A terrenti flesh contagium. Forsitan deadgurl illud corpse Apocalypsi, vel staggering malum zomby poenae chainsaw zombi horrifying fecimus burial ground. Indeflexus shotgun coup de poudre monstra per plateas currere. Fit de decay nostra carne undead. Poenitentiam violent zom biehig hway agite RE:dead pœnitentiam! Vivens mortua sunt apud nos night of the living dead.

');
        $team4->setCreated(new \DateTime());
        $team4->setUpdated($team4->getCreated());
        $manager->persist($team4);

        $team5 = new Team();
        $team5->setName('Foo5');
        $team5->setTitle('Business Development');
        $team5->setDescription('Whyt zomby Ut fames after death cerebro virus enim carnis grusome, viscera et organa viventium. Sicut spargit virus ad impetum, qui supersumus flesh eating. Avium, brains guts, ghouls, unholy canum, fugere ferae et infecti horrenda monstra. Videmus twenty-eight deformis pale, horrenda daemonum. Panduntur brains portae rotting inferi. Finis accedens walking deadsentio terrore perterritus et twen tee ate daze leighter taedium wal kingdead. The horror, monstra epidemic significant finem. Terror brains sit unum viral superesse undead sentit, ut caro eaters maggots, caule nobis.

');
        $team5->setCreated(new \DateTime());
        $team5->setUpdated($team5->getCreated());
        $manager->persist($team5);

        $manager->flush();
    }

    public function getOrder()
    {
        return 30;
    }
}