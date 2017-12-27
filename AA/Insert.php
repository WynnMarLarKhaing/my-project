<?PHP
	class Select{
		private $str;
		function __construct()
		{
			$this->str = "";
		}

		function addA()
		{
			$this->str .= "a";
			return $this;
		}

		function addB()
		{
			$this->str .= "b";
			return $this;
		}

		function getStr()
		{
			return $this->str;
		}
	}
?>