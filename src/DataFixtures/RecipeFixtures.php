<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Recipe;
use \DateTime;

class RecipeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       
        $rec = new Recipe(); 
        $rec->setDishName(' Caprese Salad');
        $rec->setDishDescription('A flavorful and quick stir-fry dish with tender chicken and crunchy vegetables, infused with a spicy sauce.');
        $rec->setIngredients('1 lb chicken breast, thinly sliced.\r\n2 cups mixed vegetables (bell peppers, broccoli, snap peas).\r\n2 cloves garlic, minced.\r\n1 tablespoon ginger, grated.\r\n2 tablespoons soy sauce.\r\n1 tablespoon sriracha sauce.\r\n1 tablespoon sesame oil.\r\nSalt and pepper to taste');
        $rec->setSteps('Heat sesame oil in a large skillet over medium-high heat.\r\nAdd minced garlic and grated ginger, sauté for 1 minute until fragrant.\r\nAdd sliced chicken breast to the skillet, season with salt and pepper, and cook until browned and cooked through.\r\nStir in mixed vegetables and cook until tender-crisp.\r\nMix soy sauce and sriracha sauce, then pour over the chicken and vegetables. Stir well to combine.\r\nCook for another 2-3 minutes until everything is heated through and coated in the sauce.\r\nServe hot over steamed rice or noodles');
        $rec->setDate(new DateTime('2024-04-01'));
        $rec->setDishImage('build/images/spicy-chicken-stir-fry.jpg'); 
        $rec->addCategory($this->getReference('cat'));
        $rec->addCategory($this->getReference('cat1'));
        $rec->addCategory($this->getReference('cat2'));
        $manager->persist($rec);

        $rec1 = new Recipe(); 
        $rec1->setDishName('Spicy Chicken Stir Fry');
        $rec1->setDishDescription('A classic Italian salad featuring ripe tomatoes, fresh mozzarella cheese, basil leaves, and a drizzle of balsamic glaze.');
        $rec1->setIngredients('2 large tomatoes, sliced.\r\nfresh mozzarella cheese, sliced.\r\nFresh basil leaves.\r\nBalsamic glaze.\r\nExtra virgin olive oil.\r\nSalt and pepper to taste');
        $rec1->setSteps('Arrange tomato slices and mozzarella slices alternately on a serving platter.Tuck fresh basil leaves between the tomato and mozzarella slices.Drizzle with balsamic glaze and extra virgin olive oil.Season with salt and pepper to taste.Serve immediately as an appetizer or side dish');
        $rec1->setDate(new DateTime('2024-04-01'));
        $rec1->setDishImage('build/images/Caprese-Salad.jpg'); 
        $rec1->addCategory($this->getReference('cat1'));
        $rec1->addCategory($this->getReference('cat2'));
        $manager->persist($rec1);

        $rec2 = new Recipe(); 
        $rec2->setDishName(' Vegetarian Quinoa Salad');
        $rec2->setDishDescription('A nutritious and colorful salad packed with protein-rich quinoa, mixed vegetables, and a zesty lemon dressing.');
        $rec2->setIngredients('1 cup quinoa, rinsed.\r\n2 cups water or vegetable broth.\r\n1 cup cherry tomatoes, halved.\r\n1 cucumber, diced.\r\n1 bell pepper, diced.\r\n1/4 cup red onion, finely chopped.\r\n1/4 cup fresh parsley, chopped.\r\n1/4 cup feta cheese, crumbled.\r\nJuice of 1 lemon.\r\n2 tablespoons olive oil.\r\nSalt and pepper to taste');
        $rec2->setSteps('In a medium saucepan, bring water or vegetable broth to a boil. Add quinoa, reduce heat to low, cover, and simmer for 15-20 minutes until quinoa is cooked and water is absorbed. Let it cool.\r\nIn a large bowl, combine cooked quinoa, cherry tomatoes, cucumber, bell pepper, red onion, and parsley.\r\nIn a small bowl, whisk together lemon juice, olive oil, salt, and pepper to make the dressing.\r\nPour the dressing over the quinoa and vegetables, toss gently to coat.\r\nSprinkle crumbled feta cheese on top.\r\nServe chilled or at room temperature. Enjoy!\r\n\r\n\r\n\r\n\r\n');
        $rec2->setDate(new DateTime('2024-04-01'));
        $rec2->setDishImage('build/images/vegan-quinoa-salad.jpg'); 
        $rec2->addCategory($this->getReference('cat'));
        $rec2->addCategory($this->getReference('cat1'));
        $rec2->addCategory($this->getReference('cat6'));
        $manager->persist($rec2);

        /*
        $rec3 = new Recipe();
        $rec3->setDishName();
        $rec3->setDishDescription();
        $rec3->setIngredients();
        $rec3->setSteps();
        $rec3->setDate();
        $rec3->setDishImage();
        $manager->persist($rec3); 

        $rec3 = new Recipe();
        $rec3->setDishName();
        $rec3->setDishDescription();
        $rec3->setIngredients();
        $rec3->setSteps();
        $rec3->setDate();
        $rec3->setDishImage();
        $manager->persist($rec3); 

        */
        $manager->flush();
    }
}
