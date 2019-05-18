<?php

use Illuminate\Database\Seeder;

class MailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tmails')->insert([
          'target_mail' => 'bdraihan71@gmail.com',
          'subject' => 'Lorem ipsum dolor sit amet',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec '
      ]);

      DB::table('tmails')->insert([
        'target_mail' => 'jihan@gmail.com',
        'subject' => 'pede justo, fringilla vel,',
        'body' => 'pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac'
        ]);

    DB::table('tmails')->insert([
      'target_mail' => 'bdraihan71@gmail.com',
      'subject' => 'enim. Aliquam lorem ante, dapibus in,',
      'body' => ' enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.  '
  ]);
    }
}
