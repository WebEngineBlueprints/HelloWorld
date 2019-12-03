<?php
namespace App\Page;

use Gt\WebEngine\Logic\Page;
use Gt\Input\InputData\InputData;

class IndexPage extends Page {
	public function go() {
// This is the entry point to the page's logic that will be executed for all
// requests to the index page. Without any user input, there is nothing to do
// here, as the "Hello, World!" message is stored in the index.html Page View.
// Docs: https://www.php.gt/docs/webengine/page-logic#the-go-function
	}

	public function doGreet(InputData $data) {
// This is a "do trigger" – a function that is automatically called according to
// a matching set of user input. In this case, the function will be called when
// there is a "do" key with the value of "greet" on the incoming request, which
// comes from clicking the greet button in the form.
// Docs: https://www.php.gt/docs/webengine/user-input#using-do-triggers

// We can output the user's name to the page by binding the input data to the
// document. This works because in the document there is an element with the
// data-bind attribute matching the key in the input data: `your-name`, so the
// value is bound automatically.
// Docs: https://www.php.gt/docs/webengine/binding-data-to-the-dom
		$this->document->bindData($data);
	}
}
