/*
   DynAPI Distribution
   LoadLayer Widget

   The DynAPI Distribution is distributed under the terms of the GNU LGPL license.

   Requirements:
	dynapi.api [dynlayer, dyndocument, browser, events]
*/


// MODIFICATIONS v.23 ( this release start from LoadPanel )
// Gabriel Suchowolski power[z]one / www.microbians.com / powerz@microbians.com

DynLayer.prototype.toLoadLayer = function (url, loadingmsg) {
	if (loadingmsg) this.loadingmsg = loadingmsg;
	else 		this.loadingmsg = "";
	this.isIFrame=true//!(is.ie5 && is.platform=='win32');
	var l=new EventListener(this);
	l.oncreate=function(e) {
		var o=e.getTarget();
		o.setURL(o.url);
		if (!o.isReloading && o.tempURL) {
			o.setURL(o.tempURL)
			if (!is.ns4) delete o.tempURL;
		}
	};
	this.addEventListener(l);
	this.tempURL=url;
	this.insertInlineElements = LoadLayer.prototype.insertInlineElements;
	this.findInlineElements   = LoadLayer.prototype.findInlineElements;
	this.setURL   		  = LoadLayer.prototype.setURL;
	this.reload   		  = LoadLayer.prototype.reload;
	this.loadHandler   	  = LoadLayer.prototype.loadHandler;
}

function LoadLayer(x, y, w, h, bgcolor, url, loadingmsg) {
	this.powerzoneClass = DynLayer;
	this.powerzoneClass(null,x,y,w,h,bgcolor);
	if (loadingmsg) this.loadingmsg = loadingmsg;
	else 		this.loadingmsg = "";
	this.isIFrame=true//!(is.ie5 && is.platform=='win32');
	var l=new EventListener(this);
	l.oncreate=function(e) {
		var o=e.getTarget();
		o.setURL(o.url);
		if (!o.isReloading && o.tempURL) {
			o.setURL(o.tempURL)
			if (!is.ns4) delete o.tempURL;
		}
	};
	this.addEventListener(l);
	this.tempURL=url;
	return this
};

LoadLayer.prototype=new DynLayer;

LoadLayer.prototype.insertInlineElements=function() {
	if (!this.loadBuffer) {
		this.loadBuffer = new DynLayer( this.id+"LOADBUFFER", -1, -1, 0, 0, null, false)
		this.parent.addChild(this.loadBuffer)
	}
	if (is.ie) {
		if (this.isIFrame)  this.loadBuffer.setHTML('<IFRAME ID="'+this.id+'loadElement" STYLE="visibility: hidden; display: none;"></IFRAME>',false);
		else 		    this.loadBuffer.setHTML('<DIV ID="'+this.id+'loadElement" STYLE="behavior:url(#default#download)" style="display: none;"></DIV>',false);
	}
	else if (is.ns6) 	    this.loadBuffer.setHTML('<IFRAME ID="'+this.id+'loadElement" STYLE="visibility: hidden;"></IFRAME>',false);
};

LoadLayer.prototype.findInlineElements=function() {
	if (is.ie) {
		if (this.isIFrame) this.loadElement=document.frames(this.id+'loadElement');
		else 		   this.loadElement=document.all(this.id+'loadElement');
	}
	else if (is.ns4) 	   this.loadElement=this.elm;
	else if (is.ns6) 	   this.loadElement=document.getElementById(this.id+'loadElement');

};

LoadLayer.prototype.setURL=function(url) {
	if (!url) return;
	if (!this.created) this.url=url;
	else {
		this.invokeEvent('beforeload');
		this.url=url;

		if (!this.loadingmsgLayer) {
			this.loadingmsgLayer = new DynLayer( this.id+"LOADING", null, null, null, null, ( is.ns4 ? this.bgColor : null ) , false)
			this.loadingmsgLayer.setHTML(this.loadingmsg)
			this.parent.addChild(this.loadingmsgLayer)
			this.loadingmsgLayer.css.boder=1
		}

		if (!is.ns4) this.loadingmsgLayer.moveTo(this.x+this.w-this.loadingmsgLayer.w-2, this.y+1)
		else {       this.loadingmsgLayer.setSize(this.w, this.h, false)
			     this.loadingmsgLayer.moveTo(this.x, this.y)
		}
		this.loadingmsgLayer.setVisible(true)

		if (is.ns4) this.setVisible(false)
		LoadLayer.queue.add(url,this);
	}
};

LoadLayer.prototype.reload=function() {
	this.isReloading=true;
	var url=this.url;
	var p=this.parent;
	this.removeFromParent();
	this.html = '';
	p.addChild(this);
	this.isReloading=false;
};

LoadLayer.prototype.loadHandler=function(url) {
	if (is.ie5 && !this.isIFrame && this.elm && this.elm.all) {
		var imgs = this.elm.all.tags("img");
		for (var i=0;i<imgs.length;i++) {
			if (imgs[i].readyState == 'uninitialized') imgs[i].src = imgs[i].src;
		}
	}
	this.isReloading=false;
	setTimeout(this.toString()+".invokeEvent('load');",20)
};


function LoadQueue() {
	this.queue=new Array();
	this.index=0;
	this.busy=false;
};

LoadQueue.prototype.toString=function() {
	return "LoadLayer.queue";
};

LoadQueue.prototype.add=function(url,LoadLayer) {
	var q=this.queue.length;
	this.queue[q]=[url,LoadLayer];
	setTimeout( this.toString()+".loadNext();",20)
};

LoadQueue.prototype.loadNext=function() {
	if (!this.busy && this.queue[this.index]) {
		this.busy=true;
		var lp=this.currentLoadLayer=this.queue[this.index][1];
		var url=this.currentURL=this.queue[this.index][0];

		if (is.ns4) {
			lp.findInlineElements();
			DynAPI.document.releaseMouseEvents();
			var lyr=lp;
			while( lyr.parent != DynAPI.document ) lyr=lyr.parent;
			lyr.elm.onload=this.loadHandler;
			lp.loadElement.onload=this.loadHandler;
			lp.loadElement.src=url;
		} else {
			if (!lp.loadElement) {
				lp.insertInlineElements();
				lp.findInlineElements();
			}
			if (is.ie) {
				if (lp.isIFrame) {
					lp.loadElement.document.isLoading=true;
					lp.loadElement.location=url;
					lp.timerID=setInterval(this.toString() + '.loadTimer()',20);
				}
				else lp.loadElement.startDownload(url,this.loadHandler);
			}
			else if (is.ns6) {
				lp.timerID=setInterval(this.toString() + '.loadTimer()',20);
				lp.loadElement.src=url;
			}
		}
		Methods.removeFromArray(this.queue,this.index);
	}
};


if (is.ns6) {
	LoadQueue.prototype.loadTimer=function() {
		var lp=this.currentLoadLayer;
		if (!document.getElementById(lp.id+'loadElement')) {
			clearInterval(lp.timerID);
			this.continueLoad();
		}
		else if (lp.loadElement.contentDocument && lp.loadElement.contentDocument.body.innerHTML != document.body.innerHTML) {
			clearInterval(lp.timerID);
			this.loadHandler(lp.loadElement.contentDocument);
		}
	}
} else if (is.ie) {
	LoadQueue.prototype.loadTimer=function() {
		var lp=this.currentLoadLayer;
		if (!document.frames(lp.id+'loadElement')) {
			clearInterval(lp.timerID);
			this.continueLoad();
		}
		else if (!lp.loadElement.document.isLoading && (lp.loadElement.document.readyState=='interactive' || lp.loadElement.document.readyState=='complete')) {
			clearInterval(lp.timerID);
			this.loadHandler(lp.loadElement.document.body.innerHTML);
		}
	}
};

LoadQueue.prototype.correctLinks=function(elmFROM, elmTO) {
	var elmFROMlnk, i;
	if (is.ie) elmFROMlnk = elmTO.elm.all.tags("A")
	else       elmFROMlnk = elmFROM.links
	if (elmFROMlnk.length >0 ) {
			var banLinksOK = true
			if (is.ns4) {
			       	for (i=0;i<elmFROMlnk.length;i++) {
					if ( elmFROMlnk[i].href.toString().indexOf("javascript:var whatlayer")!=-1 ) banLinksOK=false
				}
			}
			if (banLinksOK) {
			       	for (i=0;i<elmFROMlnk.length;i++) {
					// Corrects a href for load with loadlayer
					if (elmFROMlnk[i].target=="" || elmFROMlnk[i].target==null || elmFROMlnk[i].target=="_self" ) {
						if ( !( elmFROMlnk[i].href.toString().indexOf("javascript:") != -1 || elmFROMlnk[i].href.toString().indexOf("mailto:") != -1 )) {
							// Corrects a href that has only hash on IE to point to same file on loadlayer
							if ( is.ie && self.location.pathname.indexOf(elmFROMlnk[i].pathname)!=-1 ) {
								var h=elmFROMlnk[i].hash;
								elmFROMlnk[i].hash="";
								var pos = elmTO.url.indexOf("#")
								pos = (pos != -1) ? pos : elmTO.url.length
								elmFROMlnk[i].href="javascript:"+elmTO.toString()+".setURL('"+ elmTO.url.substr(0,pos) + h +"')";
							} else {
								elmFROMlnk[i].onmouseover = new Function("top.window.status='"+elmFROMlnk[i].href+"'; return true")
								elmFROMlnk[i].onmouseout  = new Function("top.window.status=top.window.defaultStatus; return true")
								elmFROMlnk[i].onmouseup   = new Function("top.window.status=top.window.defaultStatus; return true")
								elmFROMlnk[i].onfocus	  = new Function("this.blur();return false")
								elmFROMlnk[i].href        ="javascript:"+elmTO.toString()+".setURL('"+elmFROMlnk[i].href+"');"
							}
						}
					}
				}
				if (is.ns4 && elmTO.tempURL) {
					delete elmTO.tempURL
					this.add(this.currentLoadLayer.url,this.currentLoadLayer);
					this.continueLoad();
				} else {
					elmTO.setVisible(true);
					elmTO.loadingmsgLayer.setVisible(false)
					this.continueLoad();
				}
			} else {
				this.add(this.currentLoadLayer.url,this.currentLoadLayer);
				this.continueLoad();
			}
	} else {
		elmTO.setVisible(true);
		elmTO.loadingmsgLayer.setVisible(false)
		this.continueLoad();
	}

};

LoadQueue.prototype.loadHandler=function(e) {
	var q=LoadLayer.queue;
	var lp=q.currentLoadLayer;

	if (q.currentLoadLayer) {
		if (is.ie) {
			lp.elm.innerHTML=e;
			q.correctLinks(lp.doc,lp);
			if (lp.isIFrame) lp.loadElement=null;
		}
		else if (is.ns4) {
			q.correctLinks(lp.doc,lp)
			var lyr=lp;
			while( lyr.parent != DynAPI.document ) lyr=lyr.parent;
			lyr.elm.onload=function(){};
			lp.loadElement.onload = function(){};
		}
		else if (is.ns6) {
			q.correctLinks(e,lp);
			var html=e.body.innerHTML;
			lp.elm.innerHTML=html;
			lp.loadElement=null;
		}
	}
};

LoadQueue.prototype.continueLoad=function() {
	var q=LoadLayer.queue;
	q.currentLoadLayer.loadHandler(q.currentURL);
	q.busy=false;
	if (q.queue[q.index]) 	setTimeout( this.toString()+".loadNext();",20)
	else 			DynAPI.document.captureMouseEvents();
};

LoadLayer.queue = new LoadQueue();
