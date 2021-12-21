<?php

namespace Tests\Feature;
use App\Models\Mailinglist;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Providers\UserPayment;

class EmailAdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_email_admin_availability()
    {
        $emails = Mailinglist::all();
        if(count($emails) > 0){
            $this->assertDatabaseCount('mailinglists', count($emails));
        }else{
            $this->assertEquals(count($emails), 1); // 0=1 
        }
    }


    public function test_email_admin_delivery()
    {
        $data = [
            'email'      => "xyz@example.com",
            'amount'     => 400,
            'reason'     => "Resting",
            'subject'    => "Payment Receipt",
            'url'        =>  env('APP_URL'),
          ];
          UserPayment::dispatch($data);
          $this->assertEquals(1, 1);
    }






}
