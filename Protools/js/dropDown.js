/*the script on this page is based on a list apart's suckerfish dropdowns:
http://www.alistapart.com/articles/dropdowns
tweaked a little to add images and mouse over colors
*/

startList = function() {
	if (document.all&&document.getElementById) {
		navRoot = document.getElementById("nav");
		for (i=0; i<navRoot.childNodes.length; i++) {
			node = navRoot.childNodes[i];
			if (node.nodeName=="LI") {
				node.onmouseover=function() {
					this.className+=" over";
				}
				node.onmouseout=function() {
					this.className=this.className.replace(" over", "");
				}
				for (j=0; j<node.childNodes.length; j++) {
				node2 = node.childNodes[j];
					if (node2.nodeName=="UL") {
						for (k=0; k<node2.childNodes.length; k++) {
							node3 = node2.childNodes[k];
							if (node3.nodeName=="LI") {
								node3.onmouseover=function() {
									this.className+=" over";
								}
								node3.onmouseout=function() {
									this.className=this.className.replace(" over", "");
								}
							}
						}
					}
				}
				
				
			}
		}
	}
}
window.onload=startList;
