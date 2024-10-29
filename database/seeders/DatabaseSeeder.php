<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Item; // Import the Item model
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User seeding
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Items seeding
        $items = [
            [
                'name' => 'The Name of the Wind',
                'description' => 'The first book in The Kingkiller Chronicle series',
                'image' => 'https://m.media-amazon.com/images/I/611iKJa7a-L._AC_UF894,1000_QL80_.jpg',
                'price' => 19.99
            ],
            [
                'name' => 'Mistborn: The Final Empire',
                'description' => 'The first book in the Mistborn trilogy',
                'image' => 'https://m.media-amazon.com/images/I/81NGmugxgSL._AC_UF1000,1000_QL80_.jpg',
                'price' => 14.99
            ],
            [
                'name' => 'A Song of Ice and Fire',
                'description' => 'The epic fantasy series that inspired Game of Thrones',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/d/dc/A_Song_of_Ice_and_Fire_book_collection_box_set_cover.jpg',
                'price' => 29.99
            ],
            [
                'name' => 'The Hobbit',
                'description' => 'A classic fantasy novel by J.R.R. Tolkien',
                'image' => 'https://i.harperapps.com/covers/9780261103344/y648.jpg',
                'price' => 12.99
            ],
            [
                'name' => 'Harry Potter and the Sorcerer\'s Stone',
                'description' => 'The start of the Harry Potter series',
                'image' => 'https://m.media-amazon.com/images/I/710ESoXqVPL._AC_UF1000,1000_QL80_.jpg',
                'price' => 24.99
            ],
            [
                'name' => 'Eragon',
                'description' => 'The first book in the Inheritance Cycle series',
                'image' => 'https://m.media-amazon.com/images/I/91ikODoiYqL._AC_UF1000,1000_QL80_.jpg',
                'price' => 18.99
            ],
            [
                'name' => 'The Wheel of Time',
                'description' => 'The start of The Wheel of Time series',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIF2DMqEeWfBRfqTfAEaBhOn0jW4Cd_YngwDCMWOWabHLr-O_0aW3qQCogc4ysO0E5gN0&usqp=CAU',
                'price' => 27.99
            ],
            [
                'name' => 'The Way of Shadows',
                'description' => 'The first book in the Night Angel Trilogy',
                'image' => 'https://m.media-amazon.com/images/I/9119jj1qS6L._AC_UF1000,1000_QL80_.jpg',
                'price' => 16.99
            ],
            [
                'name' => 'The Eye of the World',
                'description' => 'The start of The Wheel of Time series',
                'image' => 'https://m.media-amazon.com/images/I/51Fr0zpaeSL._AC_UF1000,1000_QL80_.jpg',
                'price' => 25.99
            ],
            [
                'name' => 'The Priory of the Orange Tree',
                'description' => 'An epic fantasy standalone novel',
                'image' => 'https://m.media-amazon.com/images/I/91NXdVnMoGL._AC_UF1000,1000_QL80_.jpg',
                'price' => 22.99
            ],
            [
                'name' => 'The Way of Kings',
                'description' => 'The start of The Stormlight Archive series',
                'image' => 'https://m.media-amazon.com/images/I/81rjJoKDOPL._AC_UF1000,1000_QL80_.jpg',
                'price' => 29.99
            ],
        ];

        // Insert the items into the database
        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
