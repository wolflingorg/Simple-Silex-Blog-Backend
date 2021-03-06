<?php

namespace Blog\Provider;

use JMS\Serializer\SerializerBuilder;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class JMSSerializerServiceProvider implements ServiceProviderInterface
{
    /**
     * @inheritdoc
     */
    public function register(Container $app)
    {
        $app['serializer'] = function ($app) {
            $builder = new SerializerBuilder();

            return $builder
                ->setCacheDir($app['parameters']['kernel.cache_dir'] . DIRECTORY_SEPARATOR . 'jms')
                ->setDebug($app['debug'])
                ->addMetadataDir($app['jms.serializer']['metadata_dir'])
                ->build();
        };
    }
}
