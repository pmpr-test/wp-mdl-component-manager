/*! For license information please see admin.F0wYDB84l.js.LICENSE.txt */
!function(){const e=PRHelper.getHTML(),t=PRHelper.getHook(),n=PRHelper.getTool(),a=PRBackendHelper.getModal(),o=PRHelper.getRequest(),r=PRHelper.getSetting();t.bubbling("click",(t=>{const s=e.getTarget(t,"button"),c=a.getCurrent(),i=e.getElement(".pr-fieldset",e.getParent(s,".pr-modal-container"));c.showSpinner(),o.ajax(r.getOption("ajax.generate_serials_pdf")).addNonce().onSuccess((e=>{a.show({type:"success",content:e})})).onError((e=>{c.showMessage(n.error2string(e))})).onFinally((()=>{c.hideSpinner()})).send(e.serializeForm(i))}),".generate-serials-pdf"),t.bubbling("click",(t=>{const s=e.getTarget(t,"button"),c=a.getCurrent(),i=e.getElement(".pr-fieldset",e.getParent(s,".pr-modal-container"));c.showSpinner(),o.ajax(r.getOption("ajax.installation_batch_creation")).addNonce().onSuccess((e=>{a.show({content:e,type:"success",onClose:()=>n.reload()})})).onError((e=>{c.showMessage(n.error2string(e))})).onFinally((()=>{c.hideSpinner()})).send(e.serializeForm(i))}),".installation-batch-creation"),t.bubbling("click",(t=>{t.preventDefault();const n=e.getTarget(t,"button"),a=e.getElement("input",e.getParent(n));e.isElement(a)&&e.setValue(a,function(){const e="ABCDEFGHJKMNPQRSTUVWXYZ23456789";let t="";for(let n=0;n<7;n++)t+=e[Math.floor(Math.random()*e.length)];return t}())}),"#generate_serial"),t.on("click",(t=>{t.preventDefault();const n=e.getTarget(t,".push-update"),s=e.serializeForm(e.getParent(n,".pr-modal")),c=r.getOption("ajax.push_update");c&&(a.close(a.getCurrent()),o.ajax(c).addNonce().send(s))}),".push-update"),t.on("click",(t=>{t.preventDefault();const n=e.getTarget(t,".update-component-action").data("id"),a=r.getOption("ajax.update_component");a&&o.ajax(a).addNonce().send({component:n})}),".update-component-action"),t.on("click",(e=>{e.preventDefault();const t=r.getOption("ajax.update_components");t&&o.ajax(t).addNonce().send()}),".update-components-action")}();