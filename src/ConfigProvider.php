<?php 
declare(strict_types=1);
namespace  jwf05\captcha;

class ConfigProvider {
        public function __invoke(): array
        {
            return [
                'dependencies' => [
                ],
                'commands' => [
                ],
                'annotations' => [
                    'scan' => [
                        'paths' => [
                            __DIR__,
                        ],
                    ],
                ],
                'publish' => [
                    [
                        'id' => 'config',
                        'description' => 'The config of captcha.',
                        'source' => __DIR__ . '/../publish/captcha.php',
                        'destination' => BASE_PATH . '/config/autoload/captcha.php',
                    ],
                ],
            ];
        }
}

?>