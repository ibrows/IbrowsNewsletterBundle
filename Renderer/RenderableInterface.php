<?php

namespace Ibrows\Bundle\NewsletterBundle\Renderer;

interface RenderableInterface
{
    public function getContent();
    public function getName();
}