# php-tutorial-by-brad-traversy

Tutorial by Brad Traversy telling you the basics of PHP.

Now at 00:00 in part 11 of the tutorial.

## Running this project

<p>To run the main index.php page, start Xampp and then type "localhost/php-tutorial-by-brad-traversy" in the adress bar of your browser.</p>

## Linux Mint and VS Code

If you're using VS Code on Linux Mint, you might get this message:

- Cannot validate since no PHP executable is set. Use the setting 'php.validate.executablePath' to configure the PHP executable.

This means you won't get the squiggly red lines when something is typed wrong in your code. To solve this:

1. Open the terminal
2. Type "whereis php"
3. Copy the path. In my case, it's "/opt/lampp/bin/php"
4. Click on the cogwheel icon at the bottom left of you VS Code window
5. In the contextual menu that popped up, click on "settings" (which is the content of the settings.json file)
6. Under "PHP › Validate: Executable Path", paste you path.
7. For more information, [stackoverflow](https://stackoverflow.com/questions/43768614/how-to-set-php-executable-path-php-validate-executablepath-in-vscode-when-php-is) might come in handy.

You can make sure everything is working fine by writing random characters in your code **and then saving**. If you get the red squilly lines, this is working.
