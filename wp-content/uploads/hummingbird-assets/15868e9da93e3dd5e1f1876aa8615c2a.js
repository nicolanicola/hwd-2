/**handles:comment-reply**/
/*! This file is auto-generated */
window.addComment=function(p){var f,v,I,C=p.document,h={commentReplyClass:"comment-reply-link",commentReplyTitleId:"reply-title",cancelReplyId:"cancel-comment-reply-link",commentFormId:"commentform",temporaryFormId:"wp-temp-form-div",parentIdFieldId:"comment_parent",postIdFieldId:"comment_post_ID"},e=p.MutationObserver||p.WebKitMutationObserver||p.MozMutationObserver,i="querySelector"in C&&"addEventListener"in p,n=!!C.documentElement.dataset;function t(){r(),function(){if(!e)return;new e(o).observe(C.body,{childList:!0,subtree:!0})}()}function r(e){if(i&&(f=E(h.cancelReplyId),v=E(h.commentFormId),f)){f.addEventListener("touchstart",l),f.addEventListener("click",l);var t=function(e){if((e.metaKey||e.ctrlKey)&&13===e.keyCode)return v.removeEventListener("keydown",t),e.preventDefault(),v.submit.click(),!1};v&&v.addEventListener("keydown",t);for(var n,r=function(e){var t,n=h.commentReplyClass;e&&e.childNodes||(e=C);t=C.getElementsByClassName?e.getElementsByClassName(n):e.querySelectorAll("."+n);return t}(e),o=0,d=r.length;o<d;o++)(n=r[o]).addEventListener("touchstart",a),n.addEventListener("click",a)}}function l(e){var t=E(h.temporaryFormId);if(t&&I){E(h.parentIdFieldId).value="0";var n=t.textContent;t.parentNode.replaceChild(I,t),this.style.display="none";var r=E(h.commentReplyTitleId),o=r&&r.firstChild;o&&o.nodeType===Node.TEXT_NODE&&n&&(o.textContent=n),e.preventDefault()}}function a(e){var t=E(h.commentReplyTitleId),n=t&&t.firstChild.textContent,r=this,o=m(r,"belowelement"),d=m(r,"commentid"),i=m(r,"respondelement"),l=m(r,"postid"),a=m(r,"replyto")||n;o&&d&&i&&l&&!1===p.addComment.moveForm(o,d,i,l,a)&&e.preventDefault()}function o(e){for(var t=e.length;t--;)if(e[t].addedNodes.length)return void r()}function m(e,t){return n?e.dataset[t]:e.getAttribute("data-"+t)}function E(e){return C.getElementById(e)}return i&&"loading"!==C.readyState?t():i&&p.addEventListener("DOMContentLoaded",t,!1),{init:r,moveForm:function(e,t,n,r,o){var d=E(e);I=E(n);var i,l,a,m=E(h.parentIdFieldId),c=E(h.postIdFieldId),s=E(h.commentReplyTitleId),u=s&&s.firstChild;if(d&&I&&m){void 0===o&&(o=u&&u.textContent),function(e){var t=h.temporaryFormId,n=E(t),r=E(h.commentReplyTitleId),o=void 0!==r?r.firstChild.textContent:"";if(n)return;(n=C.createElement("div")).id=t,n.style.display="none",n.textContent=o,e.parentNode.insertBefore(n,e)}(I),r&&c&&(c.value=r),m.value=t,f.style.display="",d.parentNode.insertBefore(I,d.nextSibling),u.nodeType===Node.TEXT_NODE&&(u.textContent=o),f.onclick=function(){return!1};try{for(var y=0;y<v.elements.length;y++)if(i=v.elements[y],l=!1,"getComputedStyle"in p?a=p.getComputedStyle(i):C.documentElement.currentStyle&&(a=i.currentStyle),(i.offsetWidth<=0&&i.offsetHeight<=0||"hidden"===a.visibility)&&(l=!0),"hidden"!==i.type&&!i.disabled&&!l){i.focus();break}}catch(e){}return!1}}}}(window);