/**
 * Search
 * @author Donny de Vries
 */
var Search = function(options) {
	this.Init(options);
};

Search.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$searchTrigger: ".search a",
			$searchBar: 	"#searchbar",
			$form: 			"#searchbar form",
			$field: 		"#searchbar input",
			$submit: 		"#searchbar .submit a"
		};
		
		$.extend(this.options, options);

		this.$searchTrigger = $(this.options.$searchTrigger);
		this.$searchbar 	= $(this.options.$searchBar);
		this.$form 			= $(this.options.$form);
		this.$field 		= $(this.options.$field);
		this.$submit 		= $(this.options.$submit);

		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		var _this = this;

		this.$searchTrigger.on("click touchstart", function(e) {
			e.preventDefault();
			$(this).toggleClass("active");
			_this.$searchbar.toggleClass("active");

			if (_this.$searchbar.hasClass("active")) {
				_this.$field.focus();
			}
		});

		this.$submit.on("click touchstart", function(e) {
			e.preventDefault();
			_this.$form.submit();
		});
	}
};