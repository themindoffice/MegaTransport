/**
 * MobileMenu
 * @author Donny de Vries
 */
var MobileMenu = function(options) {
	this.Init(options);
};

MobileMenu.prototype =
{
	/**
	 * Constructor
	 * @param	object options
	 * @return	void
	 */
	Init: function(options)
	{
		this.options = {
			$mobileMenu: "#mobile-menu",
			$mobileMenuTrigger: "#mobile-menu-trigger"
		};
		
		$.extend(this.options, options);

		this.$mobileMenu		= $(this.options.$mobileMenu);
		this.$mobileMenuTrigger = $(this.options.$mobileMenuTrigger);
		
		this.Start();
	},
	
	/**
	 * Start
	 * @return void
	 */
	Start: function()
	{
		this.SetEvents();
	},

	/**
	 * SetEvents
	 * @return void
	 */
	SetEvents: function()
	{
		var _this = this;

		this.$mobileMenuTrigger.on("click touchstart", function(e) {
			e.preventDefault();

			_this.$mobileMenu.toggleClass("open");
		});
	}
};