<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('infos_site')->delete();
        DB::table('infos_site')->insert([
            'img1'=>'null',
            'img2'=>'null',
            'img3'=>'null',
            'presentation'=>'MA Formation est une école de formation de serrurerie. C’est d’ailleurs la première école qui offre ce genre de formation. Nous vous offrons une formation de qualité avec accompagnement à la sortie. Venez vite nous rejoindre dans cette aventure.',
            'mission'=>'Notre mission est d’offrir aux jeunes Sénégalais une formation de qualité dans le domaine de la serrurerie. Après avoir formé nos étudiants, nous les accompagnons pour qu’il obtienne dans un premier temps leur première expérience professionnelle et dans un second qu’il soit autonome et entrepreneur. Nous nous positionnons, dans ce contexte de chômage, dans le domaine de la formation professionnelle des jeunes Sénégalais.',
            'vision'=>'Notre vision est de participer à la réduction du chômage en passant par la formation professionnelle. Nous désirons être un acteur majeur de la formation des jeunes. MA formation a pour objectif de former au moins 1 000 jeunes. Nous envisageons aussi d’offrir des formations dans d’autres domaines. A travers cette école de formation, nous participons à notre manière au développement du Sénégal.'
        ]);

        DB::table('contact')->delete();
        DB::table('contact')->insert([
            'numeroT'=>'338223652 - 773913779',
            'email'=>'mameabdoutoure@yahoo.com',
            'adresse'=>'Pharmacie Touba Mbacké Immeuble Nafi Colobane 1er étage'
        ]);

        DB::table('modules')->delete();
        DB::table('modules')->insert([
            'nom'=>'Système de reproduction',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Système de déverouillage automobiles',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'40 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Configuration et programmation des clés oudes serrures électroniques',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Installation et réparation des systèmess de verrouillage',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Montages - Démontages',
            'heuresFormation'=>'20 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Système d\'ouverture de porte claquées et extraction de clés cassées',
            'heuresFormation'=>'20 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Serrures à pompes, à gorge ou double panneton',
            'heuresFormation'=>'20 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Réparation des serrures de coffres forts, de coffrets de sûreté',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Référence des ébauches',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'0 '
        ]);

        DB::table('modules')->insert([
            'nom'=>'Montage et pose des serrures',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Crochetage des cylindres de sécurité',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Contrôle d\'accès',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Connaissance des serrures : dépannage et ouverture',
            'heuresFormation'=>'40 heures',
            'heuresEntreprise'=>'20 heures'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Législation',
            'heuresFormation'=>'20 heures',
            'heuresEntreprise'=>'0'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Comptabilité',
            'heuresFormation'=>'20 heures',
            'heuresEntreprise'=>'0'
        ]);

        DB::table('modules')->insert([
            'nom'=>'Informatique',
            'heuresFormation'=>'20 heures',
            'heuresEntreprise'=>'0'
        ]);



    }
}
