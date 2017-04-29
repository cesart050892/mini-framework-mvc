<?php
/**
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2016, canchito-dev
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @author 		Jose Carlos Mendoza Prego
 * @copyright	Copyright (c) 2016, canchito-dev (http://www.canchito-dev.com)
 * @license		http://opensource.org/licenses/MIT	MIT License
 * @link		https://github.com/canchito-dev/mini-framework-mvc
 */
namespace Application\Libs\Form\Elements;

/**
 * Lets you generate a standard checkbox input field
 * @param array $attributes - an array of attributes used to configure the input field
 **/
class Checkbox extends BaseElement {
	
	private $text;
	private $checked;
	
	public function __construct() {}
	
	public function __destruct() {}
	
	public function create($attributes = array())  {
		$attributes['type'] = 'checkbox';
		parent::create($attributes);
		$this->configure();
	}
	
	public function setText($text = null) {
		$this->text = $text;
	}
	public function getText() {
		return $this->text;
	}
	
	protected function setChecked($checked = null) {
		$this->checked = $checked;
	}
	protected function getChecked() {
		return $this->checked;
	}
	protected function getHtmlChecked() {
		if ($this->checked != null)
			return 'checked';
		return '';
	}
	
	public function render() {
		// render the input control
		echo '<input ';
		$this->renderAttributes();
		echo '>' . $this->getText();
	}
}