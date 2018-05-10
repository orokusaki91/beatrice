<?php

use App\PageContent;
use Illuminate\Database\Seeder;

class PageContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageContent = new PageContent;
        $pageContent->page_id = 1;
        $pageContent->image = 'UNVv6ATohlt4MnojjpUo72qwW9GNUdodboGVVc9D.jpeg';
        $pageContent->text = '<p style="color: #000000;"><span style="color: #ffffff;">Resilienztraining</span></p>
<p style="color: #000000;"><span style="color: #ffffff;">Beratung in der Praxis</span></p>
<p style="color: #000000;"><span style="color: #ffffff;">Theaterp&auml;dagogik</span></p>
<p style="color: #000000;"><span style="color: #ffffff;">Mediation</span></p>
<p style="color: #000000;"><span style="color: #ffffff;">Dipl.Pflegefachfrau HF</span></p>
<p style="color: #000000;"><span style="color: #ffffff;">und einiges mehr...</span></p>';
        $pageContent->page_code_id = 1;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 2;
        $pageContent->image = 'sVBrUYSOqpHHmonck4P76Eae4sYJU3xP1BwoEfgq.png';
        $pageContent->text = '<p style="color: #000000;"><span style="color: #ffffff;">Mich faszinieren Menschen und ihre vielf&auml;ltigsten Motive.</span></p>
<p style="color: #000000;"><span style="color: #ffffff;">Humor, Spiel, Ernst, nachdenken....</span></p>
<p style="color: #000000;"><span style="color: #ffffff;">Ver&auml;nderung geschieht immer wieder.</span></p>
<p style="color: #000000;"><span style="color: #ffffff;">Ich kann Sie dabei, durch verschiedenste Methoden, unterst&uuml;tzen.</span></p>';
        $pageContent->page_code_id = 5;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 3;
        $pageContent->image = 'BEH4bgiUo5Z86jyNsCtwDlDSal0UCDhWeStVdHvC.jpeg';
        $pageContent->text = '<h1 style="color: #000000;">"All our dreams can come true,&nbsp;<br />if we have the courage to pursue them."</h1>
<div class="nastavak_main" style="color: #000000;">
<p>Walt Disney</p>
</div>';
        $pageContent->page_code_id = 6;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 4;
        $pageContent->image = '7minWfiN9Pv08c1jaPxs2R9HN739yhB3NceI6GUn.jpeg';
        $pageContent->title = 'Lorem ipsum';
        $pageContent->text = '<p style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, cupiditate facere ducimus sit sequi consequuntur ut deserunt cumque. Accusantium, quod.</p>
<p style="color: #000000;">Mich faszinieren Menschen und ihre vielf&auml;ltigsten Motive.</p>';
        $pageContent->page_code_id = 7;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 4;
        $pageContent->image = '01ucd3Govz6QBKyzrwc9H5ICyu21j3SNYReMsnTE.jpeg';
        $pageContent->title = 'Lorem ipsum'; 
        $pageContent->text = '<p style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, cupiditate facere ducimus sit sequi consequuntur ut deserunt cumque. Accusantium, quod.</p>
<p style="color: #000000;">Humor, Spiel, Ernst, nachdenken....</p>';
        $pageContent->page_code_id = 7;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 4;
        $pageContent->image = 'yLVxoj2UczR9vgYvVc8QCJHimGRxshGTEaWWJVrf.jpeg';
        $pageContent->title = 'Lorem ipsum'; 
        $pageContent->text = '<p style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, cupiditate facere ducimus sit sequi consequuntur ut deserunt cumque. Accusantium, quod.</p>
<p style="color: #000000;">Ver&auml;nderung geschieht immer wieder.</p>';
        $pageContent->page_code_id = 7;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 4;
        $pageContent->image = 'dmDtxfLPPAzhcIj2ZCLxz2g5O1gL6oBZ4z0eKzUW.png';
        $pageContent->title = 'Lorem ipsum'; 
        $pageContent->text = '<p style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, cupiditate facere ducimus sit sequi consequuntur ut deserunt cumque. Accusantium, quod.</p>
<p style="color: #000000;">Ich kann Sie dabei, durch verschiedenste Methoden, unterst&uuml;tzen.</p>';
        $pageContent->page_code_id = 7;
        $pageContent->save();
    }
}
