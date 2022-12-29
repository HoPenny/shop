<?php

namespace Database\Factories;

use App\Models\Element;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Element::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $pages = array_keys(json_decode(setting('constant.pages'), true));
        $position = ['slider', 'row1', 'row2', 'row3', 'row4', 'row5'];
        return [
            'updater_id' => null,
            // 'page' => $this->faker->randomElement($pages),
            'page' => rand(1, 100),
            'mode' => 'imgText',
            'title' => $this->faker->realText(10),
            'position' => $this->faker->randomElement($position),
            'icon' => null,
            'subtitle' => $this->faker->realText(20),
            'content' => $this->faker->paragraph,
            'url' => $this->faker->url,
            'url_txt' => null,
            'pic' => 'images/service-details-2.jpg',
            'video' => null,
            'alt' => null,
            'title_pos' => null,
            'title_color' => 'black',
            'q_mode' => null,
            'i_mode' => null,
            'sort' => $this->faker->numberBetween(0, 1000),
            'enabled' => rand(0, 1),
            'isShowTitle' => rand(0, 1),
            'price' => null,
            'price2' => null,
            'isBestPrice' => 0,
            'priceUnit' => null,
            'price2Unit' => null,
            'currency' => null,
            'animation' => null,
            'animationDelay' => null,
        ];
    }
}
