<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $stages = collect([
            'KS3', 'GCSE', 'ALevel', 'Degree'
        ]);

        foreach ($stages as $stage) {
            $s = new \App\Models\Stage();

            $s->name = $stage;
            $s->slug = \Illuminate\Support\Str::slug($stage);
            $s->save();
        }

        $subjects = collect([
            'English', 'Science', 'Maths', 'History', 'World Studies'
        ]);

        foreach ($subjects as $subject) {
            $s = new \App\Models\Subject();

            $s->name = $stage;
            $s->slug = \Illuminate\Support\Str::slug($subject);
            $s->save();
        }

        $virtualities = collect([
            'Online', 'Face to Face'
        ]);

        foreach ($virtualities as $virtuality) {
            $s = new \App\Models\Virtuality();

            $s->name = $virtuality;
            $s->slug = \Illuminate\Support\Str::slug($virtuality);
            $s->save();
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
