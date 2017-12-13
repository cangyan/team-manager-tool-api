<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJiraTaskConfig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jira_task_config', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger("type")->default(1)->comment("类型");
            $table->string("jira_ids", 1024)->default("")->comment("jira id列表");
            $table->date("start_date")->default("0000-00-00")->comment("有效起始时间");
            $table->date("end_date")->default("0000-00-00")->comment("有效结束时间");
            $table->string("timing")->default("00:00")->comment("指定发送时间点");
            $table->text("user_list")->default("")->comment("收件人邮箱列表");
            $table->timestamps();
            $table->index(["start_date"], "index_start_date");
            $table->index(['end_date'], "index_end_date");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jira_task_config');
    }
}
