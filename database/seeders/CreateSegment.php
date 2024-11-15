<?php

namespace Database\Seeders;

use App\Models\Segments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateSegment extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criando os segmentos
        $seg_beleza = Segments::create([
            'name' => 'Beleza',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $seg_bemestar = Segments::create([
            'name' => 'Bem estar',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $seg_saude = Segments::create([
            'name' => 'Saúde',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $seg_servicos = Segments::create([
            'name' => 'Serviços',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $seg_agenda = Segments::create([
            'name' => 'Agenda inteligente',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Preenchendo as categorias para cada segmento
        DB::table('segment_types')->insert([
            // Segmento Beleza
            [
                'id_segments' => $seg_beleza->id,
                'name' => 'Clínica de Estética',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_beleza->id,
                'name' => 'Esmalteria e manicure',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_beleza->id,
                'name' => 'Salão de beleza',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_beleza->id,
                'name' => 'Barbearia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_beleza->id,
                'name' => 'Maquiagem',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_beleza->id,
                'name' => 'Sobrancelhas e Cílios',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_beleza->id,
                'name' => 'Depilação',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_beleza->id,
                'name' => 'Cabeleireiro',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Segmento Bem Estar
            [
                'id_segments' => $seg_bemestar->id,
                'name' => 'Acupuntura',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_bemestar->id,
                'name' => 'Massagem',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_bemestar->id,
                'name' => 'Yoga e Pilates',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_bemestar->id,
                'name' => 'SPA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_bemestar->id,
                'name' => 'Psicologia e Pedagogia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_bemestar->id,
                'name' => 'Quiropraxia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_bemestar->id,
                'name' => 'Personal e Fitness',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_bemestar->id,
                'name' => 'Terapias Holísticas',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Segmento Saúde
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Psiquiatra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Endocrinologista',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Podologia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Cardiologista',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Fisioterapia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Neurologista',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Dermatologia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Clínica Odontológica',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Pediatra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_saude->id,
                'name' => 'Consultório Médico',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_segments' => $seg_saude->id,
                'name' => 'Clínica Oftalmológica',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id_segments' => $seg_saude->id,
                'name' => 'Geriatra',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Segmento Serviços
            [
                'id_segments' => $seg_servicos->id,
                'name' => 'Pet Shop',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_servicos->id,
                'name' => 'Oficina Mecânica',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_servicos->id,
                'name' => 'Coloração Pessoal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_servicos->id,
                'name' => 'Serviços Automotivos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_servicos->id,
                'name' => 'Tatuagem e Piercing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_servicos->id,
                'name' => 'Consultoria de Estilo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_servicos->id,
                'name' => 'Clínica Veterinária',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_servicos->id,
                'name' => 'Tecnologia e Informática',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Segmento Agenda Inteligente
            [
                'id_segments' => $seg_agenda->id,
                'name' => 'Consultas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_agenda->id,
                'name' => 'Mentorias',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_agenda->id,
                'name' => 'Locação de Quadras',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_agenda->id,
                'name' => 'Coworking',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_agenda->id,
                'name' => 'Professores',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_segments' => $seg_agenda->id,
                'name' => 'Reuniões',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}