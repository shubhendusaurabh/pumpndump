
		<!-- Google Analytics: -->
		<script async="async">
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] ||
				function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-39574724-1', 'pumpndump.in');
			ga('send', 'pageview');

		</script>
		<!-- Piwik -->
		<script async="async" type="text/javascript">
			var _paq = _paq || [];
			_paq.push(["trackPageView"]);
			_paq.push(["enableLinkTracking"]);

			(function() {
				var u = (("https:" == document.location.protocol) ? "https" : "http") + "://pumpndump.in/piwik/";
				_paq.push(["setTrackerUrl", u + "piwik.php"]);
				_paq.push(["setSiteId", "1"]);
				var d = document, g = d.createElement("script"), s = d.getElementsByTagName("script")[0];
				g.type = "text/javascript";
				g.defer = true;
				g.async = true;
				g.src = u + "piwik.js";
				s.parentNode.insertBefore(g, s);
			})();
		</script>
		<!-- End Piwik Code -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script>
			$("[data-toggle=popover]").popover()
		</script>
	</body>

</html>