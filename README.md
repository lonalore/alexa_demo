# alexa_demo

This is an example plugin implementing a request subscriber for Amazon Echo
Alexa Skill. The plugin will respond to one Alexa intent and reply "Hello Plugin" to any other intent.

If you ask Alexa, "ask <my app> help" Amazon will call AMAZON.HelpIntent and
this module will respond with:

>For any other intent routed to this plugin the plugin will just respond
"Hello Plugin"
