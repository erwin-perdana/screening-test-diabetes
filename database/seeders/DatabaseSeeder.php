<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Question;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::beginTransaction();

        try {
            // seed admin
            DB::table('users')->insert([
                'first_name' => Str::random(10),
                'last_name' => Str::random(10),
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'address' => '-',
                'role' => 'Admin'
            ]);
            // seed question 1
            $question = Question::create([
                'question' => "Your age group",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'Under 35 years', 'poin' => 0],
                ['information' => '35-44 years', 'poin' => 2],
                ['information' => '45-54 years', 'poin' => 4],
                ['information' => '55-64 years', 'poin' => 6],
                ['information' => '65 years or over', 'poin' => 8]
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 2
            $question = Question::create([
                'question' => "Your gender",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'Female', 'poin' => 0],
                ['information' => 'Male', 'poin' => 3],
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 3a
            $question = Question::create([
                'question' => "Are you of aboriginal, Torres Strait Islander, Pasific Islander or Maori descent?",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'No', 'poin' => 0],
                ['information' => 'Yes', 'poin' => 2],
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 3b
            $question = Question::create([
                'question' => "Where were you born",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'Australia', 'poin' => 0],
                ['information' => 'Asia (Including the indian sub-continent), Middle East, North Africa, Southern Europe', 'poin' => 2],
                ['information' => 'Other', 'poin' => 0],
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 4
            $question = Question::create([
                'question' => "Have either of your parents, or any of your brothers or sisters been diagnosed with diabetes (type 1 or type 2) ?",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'No', 'poin' => 0],
                ['information' => 'Yes', 'poin' => 3],
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 5
            $question = Question::create([
                'question' => "Have you ever been found to have high blood glucose (sugar) (for example, in a health examintaion, during an ilness, during pregnancy)?",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'No', 'poin' => 0],
                ['information' => 'Yes', 'poin' => 6],
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 6
            $question = Question::create([
                'question' => "Are you currently taking medication for high blood pressure?",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'No', 'poin' => 0],
                ['information' => 'Yes', 'poin' => 2],
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 7
            $question = Question::create([
                'question' => "Do you currenctly smoke cigarettes or any other tobacco products on a daily basis?",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'No', 'poin' => 0],
                ['information' => 'Yes', 'poin' => 2],
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 8
            $question = Question::create([
                'question' => "How oftern do you ear vegetables or fruit?",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'Every day', 'poin' => 0],
                ['information' => 'Not every day', 'poin' => 1],
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 9
            $question = Question::create([
                'question' => "On average, would you say you do at least 2.5 hours of physical activity per week (for example, 30 minutes a day on 5 or more days a week) ?",
                'type' => "option"
            ]);
            $options = [
                ['information' => 'Yes', 'poin' => 0],
                ['information' => 'No', 'poin' => 2],
            ];
            foreach ($options as $option) {
                DB::table('options')->insert([
                    'question_id' => $question->id,
                    'information' => $option['information'],
                    'poin' => $option['poin'],
                ]);
            }
            // seed question 10
            $question = Question::create([
                'question' => "Your waist measurement taken below the ribs (usually at the level of the navel, and while standing)",
                'type' => "input"
            ]);
            
            // dd("die");
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
