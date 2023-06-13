<?php
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(user::class);
            $table->string('NombreProyecto',100);
            $table->string('FuenteFondos',100);
            $table->decimal('MontoPlanificado',10,2);
            $table->decimal('MontoPatrocinado',10,2);
            $table->decimal('MontoFondosPropios',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
