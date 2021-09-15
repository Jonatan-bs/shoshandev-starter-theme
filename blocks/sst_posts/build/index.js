!function(){"use strict";var e,t={974:function(e,t,n){var o=window.wp.blocks,r=window.wp.blockEditor,l=window.wp.element,a=(window.wp.i18n,window.wp.serverSideRender),s=n.n(a),i=window.wp.components,u=function(e){const{attributes:t,setAttributes:n}=e,{cols:o,postsAmount:a,order:s,postType:u,postsPerLoad:c,loadmore:p}=t;return(0,l.createElement)(r.InspectorControls,null,(0,l.createElement)(i.PanelBody,{title:"Main Settings",initialOpen:!0},(0,l.createElement)(i.RangeControl,{label:"Amount of posts",value:a,onChange:e=>n({postsAmount:e}),min:1,max:16}),(0,l.createElement)(i.RangeControl,{label:"Columns",value:o,onChange:e=>n({cols:e}),min:1,max:4}),(0,l.createElement)(i.SelectControl,{label:"Order",value:s,options:[{label:"Ascending",value:"ASC"},{label:"Descending",value:"DESC"}],onChange:e=>n({order:e})})),(0,l.createElement)(i.PanelBody,{title:"Load more button",initialOpen:!1},(0,l.createElement)(i.ToggleControl,{label:"Load more button",checked:p,onChange:e=>n({loadmore:e})}),(0,l.createElement)(i.RangeControl,{label:"Posts per load",value:c,help:`Load ${c} new posts on click`,onChange:e=>n({postsPerLoad:e}),min:1,max:16})))};(0,o.registerBlockType)("sst/posts",{edit:function(e){const{attributes:t,setAttributes:n}=e;return(0,l.createElement)(l.Fragment,null,(0,l.createElement)("div",(0,r.useBlockProps)(),(0,l.createElement)(s(),{block:"sst/posts",attributes:t})),(0,l.createElement)(u,{attributes:t,setAttributes:n}))},save:()=>null})}},n={};function o(e){var r=n[e];if(void 0!==r)return r.exports;var l=n[e]={exports:{}};return t[e](l,l.exports,o),l.exports}o.m=t,e=[],o.O=function(t,n,r,l){if(!n){var a=1/0;for(c=0;c<e.length;c++){n=e[c][0],r=e[c][1],l=e[c][2];for(var s=!0,i=0;i<n.length;i++)(!1&l||a>=l)&&Object.keys(o.O).every((function(e){return o.O[e](n[i])}))?n.splice(i--,1):(s=!1,l<a&&(a=l));if(s){e.splice(c--,1);var u=r();void 0!==u&&(t=u)}}return t}l=l||0;for(var c=e.length;c>0&&e[c-1][2]>l;c--)e[c]=e[c-1];e[c]=[n,r,l]},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,{a:t}),t},o.d=function(e,t){for(var n in t)o.o(t,n)&&!o.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},function(){var e={826:0,46:0};o.O.j=function(t){return 0===e[t]};var t=function(t,n){var r,l,a=n[0],s=n[1],i=n[2],u=0;if(a.some((function(t){return 0!==e[t]}))){for(r in s)o.o(s,r)&&(o.m[r]=s[r]);if(i)var c=i(o)}for(t&&t(n);u<a.length;u++)l=a[u],o.o(e,l)&&e[l]&&e[l][0](),e[a[u]]=0;return o.O(c)},n=self.webpackChunkposts=self.webpackChunkposts||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))}();var r=o.O(void 0,[46],(function(){return o(974)}));r=o.O(r)}();