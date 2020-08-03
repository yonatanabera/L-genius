<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        

        $this->call(RoleSeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(ItemCategorySeeder::class);

        factory(App\User::class, 7)->create();
        factory(App\Model\Blog::class, 50)->create();
        factory(App\Model\BlogComment::class, 500)->create();
        factory(App\Model\BlogCommentReply::class, 2000)->create();
        factory(App\Model\CallbackRequest::class, 50)->create();
        factory(App\Model\CompanyDetail::class, 1)->create();
        factory(App\Model\ContactInformation::class, 1)->create();
        factory(App\Model\Gallary::class, 30)->create();
        factory(App\Model\Shop::class, 50)->create();
        factory(App\Model\ItemReviewAndComment::class, 50)->create();
        factory(App\Model\Order::class, 50)->create();
        factory(App\Model\ServiceCounter::class, 1)->create();
        factory(App\Model\Service::class, 9)->create();
        factory(App\Model\Testimonial::class, 50)->create();
        factory(App\Model\WhyCoaching::class, 1)->create();
        factory(App\Model\YourThought::class, 50)->create();
        factory(App\Model\About::class, 1)->create();
        factory(App\Model\MainService::class, 1)->create();
    }
}
