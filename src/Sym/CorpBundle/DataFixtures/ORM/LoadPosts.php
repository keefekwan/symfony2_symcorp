<?php
// src/Sym/CorpBundle/DataFixtures/ORM/LoadBlogs.php

namespace Sym\CorpBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Sym\CorpBundle\Entity\Post;
use Sym\CorpBundle\Entity\Category;

class LoadPosts extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $post1 = new Post();
        $post1->setCategory($manager->merge($this->getReference('category-1')));
        $post1->setTitle('About Us');
        $post1->setBody1('<p>Cow et aliqua short ribs, chicken capicola bacon. Cupidatat commodo pork, aliqua pancetta corned beef aliquip voluptate in. Laboris boudin corned beef, ut capicola ex shoulder laborum mollit meatball pig aliquip adipisicing ham hock et. Nulla frankfurter pariatur consequat reprehenderit, non laborum culpa adipisicing venison anim meatball do.

Sint et esse t-bone fatback beef ribs. Flank ut tongue, pork loin fugiat salami dolore cillum venison adipisicing shankle.</p>');
        $post1->setBody2('Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.
                <p>Dolore drumstick venison voluptate cupidatat jowl incididunt t-bone nostrud sausage brisket in sint. Ut tempor short loin chicken, bacon non tongue officia veniam.

                    Magna bacon kielbasa consectetur swine. Qui capicola officia culpa. Salami shank pariatur magna consequat pork belly in nulla in hamburger laboris chuck qui. Turducken bacon swine nulla reprehenderit shoulder ad tenderloin ham qui et irure tongue nostrud. Ham hock voluptate ribeye ut fatback, cow culpa. Kielbasa pastrami in, culpa shoulder et pariatur aliquip corned beef. Tail ut incididunt, bacon ham hock exercitation elit laborum strip steak eiusmod.

                    Proident ad doner ham hock meatloaf, bresaola cillum. Ad est velit in, dolore dolor consectetur. Officia turducken shankle tongue, aliquip cillum pork belly deserunt porchetta magna hamburger consequat culpa est. Beef commodo leberkas, dolor qui ea salami brisket sirloin irure. Chicken mollit chuck ut sausage nostrud excepteur turducken short ribs bresaola boudin shank eiusmod. Sed boudin beef, flank pancetta culpa nostrud laboris.

                    Laborum tri-tip jerky sausage eu ut nostrud drumstick. Et capicola reprehenderit tongue. Hamburger enim ullamco quis eiusmod. Pancetta rump qui, hamburger drumstick dolore brisket laborum landjaeger frankfurter ham.</p>');
        $post1->setAuthor('KK');
        $post1->setCreated(new \DateTime("2014-04-23 21:03:02"));
        $post1->setUpdated($post1->getCreated());
        $manager->persist($post1);

        $post2 = new Post();
        $post2->setCategory($manager->merge($this->getReference('category-2')));
        $post2->setTitle('Our Company History');
        $post2->setBody1('<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>');
        $post2->setBody2('<p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>');
        $post2->setAuthor('KK');
        $post2->setCreated(new \DateTime("2014-05-07 19:47:12"));
        $post2->setUpdated($post2->getCreated());
        $manager->persist($post2);

        $post3 = new Post();
        $post3->setCategory($manager->merge($this->getReference('category-3')));
        $post3->setTitle('Meet Our Team');
        $post3->setBody1('
        Foo1 President and Chief Executive Officer
        Foo2 Chief Financial Officer
        Foo3 Global Operations
        Foo4 General Counsel and Secretary
        Foo5 Global Human Resources
        Foo6 Business Development
        Foo7 Chief Technology and Marketing Officer');
        $post3->setBody2('
        Foo1 President and Chief Executive Officer
        Foo2 Chief Financial Officer
        Foo3 Global Operations
        Foo4 General Counsel and Secretary
        Foo5 Global Human Resources
        Foo6 Business Development
        Foo7 Chief Technology and Marketing Officer');
        $post3->setAuthor('KK');
        $post3->setCreated(new \DateTime("2014-03-21 09:11:03"));
        $post3->setUpdated($post3->getCreated());
        $manager->persist($post3);

        $post4 = new Post();
        $post4->setCategory($manager->merge($this->getReference('category-4')));
        $post4->setTitle('Do you have what it takes to Join Us?');
        $post4->setBody1('Dolor qui pig strip steak, tail nulla tongue non bresaola eiusmod. Rump sirloin qui tri-tip ea, beef consectetur landjaeger aliqua anim hamburger pig meatloaf ex. Pork belly cupidatat est meatloaf et. Consequat kielbasa rump quis ball tip landjaeger.');
        $post4->setBody2('Dolor qui pig strip steak, tail nulla tongue non bresaola eiusmod. Rump sirloin qui tri-tip ea, beef consectetur landjaeger aliqua anim hamburger pig meatloaf ex. Pork belly cupidatat est meatloaf et. Consequat kielbasa rump quis ball tip landjaeger.');
        $post4->setAuthor('KK');
        $post4->setCreated(new \DateTime("2014-02-12 06:32:03"));
        $post4->setUpdated($post4->getCreated());
        $manager->persist($post4);

        $post5 = new Post();
        $post5->setCategory($manager->merge($this->getReference('category-5')));
        $post5->setTitle('SymCorp information');
        $post5->setBody1('Established in 1887. Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Donec dignissim nibh fermentum odio ornare sagittis.');
        $post5->setBody2('Suspendisse ultrices ornare tempor. Aenean eget ultricies libero. Phasellus non ipsum eros. Vivamus at dignissim massa. Aenean dolor libero, blandit quis interdum et, malesuada nec ligula. Nullam erat erat, eleifend sed pulvinar ac. Suspendisse ultrices ornare tempor. Aenean eget ultricies libero.');
        $post5->setAuthor('KK');
        $post5->setCreated(new \DateTime("2014-02-12 06:32:03"));
        $post5->setUpdated($post5->getCreated());
        $manager->persist($post5);

        $manager->flush();
    }

    public function getOrder()
    {
        return 20;
    }
}