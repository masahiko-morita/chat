{"filter":false,"title":"2018_05_25_164901_add_title_to_tasks_table.php","tooltip":"/tasklist/database/migrations/2018_05_25_164901_add_title_to_tasks_table.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":0,"column":0},"end":{"row":34,"column":1},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateTasksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('tasks', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->string('content');","            $table->timestamps();","            ","            $table->foreign('user_id')->references('id')->on('users');","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('tasks');","    }","}"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":34,"column":1},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateTasksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('tasks', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id')->unsigned()->index();","            $table->string('content');","            $table->timestamps();","            ","            $table->foreign('user_id')->references('id')->on('users');","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('tasks');","    }","}"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":32,"column":0},"action":"insert","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class AddStatusToTasksTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::table('tasks', function (Blueprint $table) {","            $table->string('status',10);","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::table('tasks', function (Blueprint $table) {","            $table->dropColumn('status');","        });","    }","}",""],"id":3}],[{"start":{"row":6,"column":14},"end":{"row":6,"column":15},"action":"remove","lines":["s"],"id":4},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"remove","lines":["u"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"remove","lines":["t"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"remove","lines":["a"]},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"remove","lines":["t"]},{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"remove","lines":["S"]}],[{"start":{"row":6,"column":9},"end":{"row":6,"column":10},"action":"insert","lines":["t"],"id":5},{"start":{"row":6,"column":10},"end":{"row":6,"column":11},"action":"insert","lines":["i"]},{"start":{"row":6,"column":11},"end":{"row":6,"column":12},"action":"insert","lines":["t"]},{"start":{"row":6,"column":12},"end":{"row":6,"column":13},"action":"insert","lines":["l"]},{"start":{"row":6,"column":13},"end":{"row":6,"column":14},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":6,"column":14},"end":{"row":6,"column":14},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528164023435,"hash":"6a90f3d307021fcda0a0f7776fd3b1858aae2dc2"}