<?php

namespace Slackbot;

/**
 * Class Config.
 */
class Config extends AbstractConfig
{
    protected static $configs = [
        // This is only used for testing config class
        'testKey'              => 'testValue',
        'testKeyReplace'       => 'testValue {replaceIt}',
        'baseUrl'              => 'http://localhost:8888',
        'defaultTimeZone'      => 'Australia/Melbourne',
        'apiToken'             => 'YOUR_API_TOKEN',
        'channelName'          => '#general',
        'botUsername'          => 'YOUR_BOT_USERNAME',
        'outgoingWebhookToken' => 'YOUR_OUTGOING_WEBHOOK_TOKEN',
        'chatLogging'          => true,
        'tmpFolderName'        => 'tmp',
        'chatLoggingFileName'  => 'chat_log',
        'iconURL'              => 'YOUR_BOT_ICON_URL_48_BY_48',
        // possible values are: slack, json
        'response'      => 'slack',
        'rootNamespace' => 'Slackbot',
        // this is used if there is no command has been specified in the message
        'defaultCommand' => 'help',
        /*
         * Generic messages
         */
        'noCommandMessage' => "Sorry. I couldn't find any command in your message.
        List the available commands using /help",
        'unknownCommandMessage' => "Sorry. I do not know anything about your command: '/{command}'.
        List the available commands using /help",
        // leave it empty to disable it
        'confirmReceivedMessage' => "I have received your message and am thinking about it!"
    ];
}
