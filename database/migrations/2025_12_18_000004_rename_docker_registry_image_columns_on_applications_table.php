<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            if (Schema::hasColumn('applications', 'docker_image_name')) {
                $table->renameColumn('docker_image_name', 'docker_image_name');
            }
            if (Schema::hasColumn('applications', 'docker_image_tag')) {
                $table->renameColumn('docker_image_tag', 'docker_image_tag');
            }
        });
    }

    public function down(): void
    {
        Schema::table('applications', function (Blueprint $table) {
            if (Schema::hasColumn('applications', 'docker_image_name')) {
                $table->renameColumn('docker_image_name', 'docker_image_name');
            }
            if (Schema::hasColumn('applications', 'docker_image_tag')) {
                $table->renameColumn('docker_image_tag', 'docker_image_tag');
            }
        });
    }
};
