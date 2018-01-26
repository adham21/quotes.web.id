<?php

use Illuminate\Database\Seeder;
use App\QuotesHouse;
class QuotesHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample quotes
        $quote = new QuotesHouse();
        $quote->isi_quote = 'Every day brings new choices';
        $quote->tag_quote = 'Inspiration';
        $quote->author_quote = 'Adham';
        $quote->save();

        // sample quotes
        $quote = new QuotesHouse();
        $quote->isi_quote = 'Happiness is not a goal; it is a by-product';
        $quote->tag_quote = 'Inspiration';
        $quote->author_quote = 'Adham';
        $quote->save();

        // sample quotes
        $quote = new QuotesHouse();
        $quote->isi_quote = 'With the new day comes new strength and new thoughts';
        $quote->tag_quote = 'Inspiration';
        $quote->author_quote = 'Adham';
        $quote->save();
    }
}
