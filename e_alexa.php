<?php

/**
 * @file
 * Hooks provided by Alexa plugin.
 *
 * This is an example addon file implementing a request subscriber for
 * Amazon Echo Alexa Skill.
 *
 * If you ask Alexa, "ask <my app> help" Amazon will call AMAZON.HelpIntent.
 */


use Alexa\Response\Response;


/**
 * Class PLUGIN_alexa.
 */
class alexa_demo_alexa
{

	/**
	 * Allow the plugin to respond to whatever ASK intents it recognizes.
	 *
	 * @param \Alexa\Request\Request $request
	 *   The Alexa request.
	 *
	 * @return \Alexa\Response\Response|null
	 *   An Alexa response to pass along, or NULL if we don't have a response
	 *   for this request.
	 */
	function config(\Alexa\Request\Request $request)
	{
		$response = new Response();

		if (isset($request->intentName)) {
			switch ($request->intentName) {
				case 'AMAZON.HelpIntent':
					$response->respond('You can say "hello" from your city and I will respond with "Hello Plugin"!');
					break;

				case 'HelloPlugin':
					$response->respond('Hello Plugin!');
					break;
			}
		}

		return $response;
	}

}
