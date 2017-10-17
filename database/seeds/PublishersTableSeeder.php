<?php

use Illuminate\Database\Seeder;
use Bookstore\Publisher;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher = new Publisher([
            'publisher_id' => '1',
            'publisher_name' => 'New Riders'
        ]);

        $publisher->save();

        $publisher = new Publisher([
            'publisher_id' => '2',
            'publisher_name' => 'Blackstone Audio, Inc.'
        ]);

        $publisher->save();

        $publisher = new Publisher([
            'publisher_id' => '3',
            'publisher_name' => 'No Starch Press'
        ]);

        $publisher->save();

        $publisher = new Publisher([
            'publisher_id' => '4',
            'publisher_name' => 'Cambridge University Press'
        ]);

        $publisher->save();

        $publisher = new Publisher([
            'publisher_id' => '5',
            'publisher_name' => "O'Reilly Media"
        ]);

        $publisher->save();
    }
}
