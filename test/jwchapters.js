function chaptersBlob(c){
	webVTT = "WEBVTT\n\n"		
	for (i=0,len=c.length;i<len;++i) {
		c[i] = Math.floor(c[i])
		cur = ("00" + parseInt( c[i] / 3600 ) % 24).slice(-2) + ":" + ("00" + parseInt( c[i] / 60 ) % 60).slice(-2) + ":" + ("00" + c[i] % 60).slice(-2)
		
		if (c[i]<=len) {
			next = ("00" + parseInt( c[i+1] / 3600 ) % 24).slice(-2) + ":" + ("00" + parseInt( c[i+1] / 60 ) % 60).slice(-2) + ":" + ("00" + c[i+1] % 60).slice(-2) 
		} else {
			next = "00:00:00"
		}
		webVTT += i+1+"\n"+cur+".000 --> "+ next + ".000\nChapters\n\n"
	}
	return window.URL.createObjectURL(new Blob([webVTT], {type: "text/plain"}));
}