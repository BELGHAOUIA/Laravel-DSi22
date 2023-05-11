<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Database\Seeders\Sequence;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Commentaire;
use App\Models\Equipe;
use App\Models\Role;
use App\Models\Athlete;
use App\Models\EvenementSportif;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //  App\Models\User::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        //  ]);

        User::factory(2)
        ->has(EvenementSportif::factory()
        ->count(1)
        ->has(Categorie::factory()
        ->count(3)
        ->state(new Sequence(
            ['nom' => 'Minim'],
            ['nom' => 'Cadet'],
            ['nom' => 'Senior'],
        ))
        ->state(new Sequence(
            ['sexe' => 'HOMME'],
            ['sexe' => 'FEMME'],
        ))
        ->state(new Sequence(
            ['poids' => '-40 KG'],
            ['poids' => '-50 KG'],
            ['poids' => '+50 KG'],
        ))
        ->has(athlete::factory()
        ->count(2)
        ->state(function (array $attributes, Categorie $categorie){
            return ['sexe' => $categorie->sexe];
        })
        ->for(Equipe::factory())
        ->hasCommentaires(2)
        )
        )
        ->hasCommentaires(2)
        )
        ->has(Role::factory()->count(2)
                           ->state(new Sequence(
                            ['nom' => 'Admin'],
                            ['nom' => 'User'],
                            ['nom' => 'Manager']
                           ))
        )
        ->create();
    }
}
