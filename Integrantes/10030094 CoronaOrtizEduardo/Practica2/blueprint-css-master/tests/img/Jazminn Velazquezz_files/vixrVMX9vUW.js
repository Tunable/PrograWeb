/*1375156531,178134571*/

if (self.CavalryLogger) { CavalryLogger.start_js(["ZrL6x"]); }

__d("BugBar",["Event","AsyncRequest","AsyncDialog","CSS","DOM","DataCollector","Dialog","Input","copyProperties","ge","tx"],function(a,b,c,d,e,f){var g=b('Event'),h=b('AsyncRequest'),i=b('AsyncDialog'),j=b('CSS'),k=b('DOM'),l=b('DataCollector'),m=b('Dialog'),n=b('Input'),o=b('copyProperties'),p=b('ge'),q=b('tx'),r={};o(r,{_nub:null,_nubClasses:['bugNubInfo','bugNubWarning','bugNubFatal'],_taskTags:[],_taskSubscribers:[],_savedInput:null,_form:null,_duplicate_task_title:null,addMetadata:function(s){l.addMetadata(s);},getMetadata:function(){return l.getMetadata();},addTaskSubscribers:function(s){r._taskSubscribers=r._taskSubscribers.concat(s);},getTaskSubscribers:function(){return r._taskSubscribers;},addTaskTags:function(s){r._taskTags=r._taskTags.concat(s);},getTaskTags:function(){return r._taskTags;},reset:function(){l.reset();r._taskTags=[];},cancel:function(){var s=this._dialog;delete this._dialog;r.reset();if(s)s.hide();},initForm:function(s){var t=s.form;this._form=s.form;this.initFormField(t.logs);this.initFormField(t.metadata);r.setProductAreaFocus.defer();},initFormField:function(s){var t;if(s.name=="logs"){t=l._collectLogs();try{s.value=JSON.stringify(t);}catch(u){}}else if(s.name=="metadata"){t=l._collectMetadata();s.value=JSON.stringify(t);}},initNub:function(s){this._nub=s;},initScreenshotUploader:function(s){var t=k.scry(r._dialog.getRoot(),'button');s.setSubmitButtons(t);},setProductAreaFocus:function(){var s=k.scry(document.body,'select#product_category');s&&s.length&&s[0].focus();},taskCreated:function(s,t){this.cancel();var u=new m().setTitle(s).setBody(t).setButtons(m.OK).show();},subscribeSubmit:function(s,t){r._dialog=s;s.subscribe(['submit'],function(){if(this._form.duplicate_task_id){var u=this._form.duplicate_task_id.value;if(u){var v="Another report of bug: "+this._duplicate_task_title;if(!n.isEmpty(t))v=v+"\n\nAdditional description: "+t.value;n.setValue(t,v);}}if(n.getValue(t).length<4){j.show(p('bug_report_warning'));k.setContent(p('bug_report_warning'),"Proporciona m\u00e1s detalles sobre el problema que tienes.");return false;}}.bind(this));},fillSavedDescription:function(s){s=p(s);this._savedInput=this._savedInput||"Sorry, we lost your original description :(";k.setContent(s,this._savedInput);},hide:function(){if(r._dialog){j.hide(r._dialog.getRoot());return true;}return false;},unhide:function(){if(r._dialog){j.show(r._dialog.getRoot());var s=JSON.parse(this._form.debuginfo.value);s.additionalmetadata=s.additionalmetadata||{};o(s.additionalmetadata,r.getMetadata());this._form.debuginfo.value=JSON.stringify(s);return true;}return false;},openBugDialog:function(s){if(r._dialog)return false;var t=new h(s);i.send(t);},registerMeToo:function(s,t,u,v,w){g.listen(s,'click',function(event){j.show(p('bug_report_warning'));k.setContent(p('bug_report_warning'),['When you submit this bug report, it will be merged into task ',k.create('a',{href:w},"#"+u+": "+v),'. '+'It is optional to include a description. Please hit submit!']);this._form.duplicate_task_id.value=u;this._duplicate_task_title=v;}.bind(this));},setNubLevel:function(s){if(this._nub){this._nubClasses.forEach(function(t){j.removeClass(this._nub,t);}.bind(this));j.addClass(this._nub,this._nubClasses[s]);}}});e.exports=r;});