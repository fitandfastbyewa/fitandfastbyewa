<?php
    class Controller
    {
        var $vars = [];
        var $layout = "default";

        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }

        function render($filename)
        {
            require_once(ROOT . 'Models/Category.php');
            $categoryModel = new Category();
            $d['categories'] = $categoryModel->getAll();

            if($filename === 'recipe') {
                $d['page_title'] = $this->vars['recipe']['title'];
                $d['recipe_description'] = $this->vars['recipe']['description'];
                $d['recipe_key'] = $this->vars['recipe']['title'];

                foreach($this->vars['recipe']['categories'] as $category) {
                  $d['recipe_key'] .= ', ' . $category['name'];
                }

                $d['recipe_img'] = WWW . '/public/images/przepisy/' . $this->vars['recipe']['imageUrl'];
            }

            $d['recomended_recipes'] = $categoryModel->getRecomendedRecipes();

            $this->set($d);

            extract($this->vars);
            ob_start();
            require(ROOT . "Views/" . ucfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');
            $content_for_layout = ob_get_clean();

            if ($this->layout == false)
            {
                $content_for_layout;
            }
            else
            {
                require(ROOT . "Views/Layouts/" . $this->layout . '.php');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
?>
