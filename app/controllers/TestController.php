<?php

/**
 * @RoutePrefix("/api/products")
 */
class TestController extends ControllerBase
{

    /**
     * @Get("/")
     */
    public function indexAction()
    {
        $post = new Post();
        $post->title = 'test';
        if ($post->save() == false) {
            echo "Umh, We can't store robots right now: \n";
            foreach ($post->getMessages() as $message) {
                echo $message, "\n";
            }
        } else {
            echo "Great, a new robot was saved successfully!";
        }
    }

}

