(()=>{"use strict";var e,r={817:()=>{const e=window.wp.blocks,r=window.wp.element,t=window.wp.components,o=window.wp.blockEditor,s=JSON.parse('{"u2":"create-block/abe-first-block"}');(0,e.registerBlockType)(s.u2,{example:{attributes:{message:"Abe First Block"}},edit:function({attributes:e,setAttributes:s}){const n=(0,o.useBlockProps)();return(0,r.createElement)("div",{...n},(0,r.createElement)(t.TextControl,{value:e.message,onChange:e=>s({message:e})}))},save:function({attributes:e}){const t=o.useBlockProps.save();return(0,r.createElement)("div",{...t},e.message)}})}},t={};function o(e){var s=t[e];if(void 0!==s)return s.exports;var n=t[e]={exports:{}};return r[e](n,n.exports,o),n.exports}o.m=r,e=[],o.O=(r,t,s,n)=>{if(!t){var a=1/0;for(u=0;u<e.length;u++){t=e[u][0],s=e[u][1],n=e[u][2];for(var i=!0,l=0;l<t.length;l++)(!1&n||a>=n)&&Object.keys(o.O).every((e=>o.O[e](t[l])))?t.splice(l--,1):(i=!1,n<a&&(a=n));if(i){e.splice(u--,1);var c=s();void 0!==c&&(r=c)}}return r}n=n||0;for(var u=e.length;u>0&&e[u-1][2]>n;u--)e[u]=e[u-1];e[u]=[t,s,n]},o.o=(e,r)=>Object.prototype.hasOwnProperty.call(e,r),(()=>{var e={826:0,431:0};o.O.j=r=>0===e[r];var r=(r,t)=>{var s,n,a=t[0],i=t[1],l=t[2],c=0;if(a.some((r=>0!==e[r]))){for(s in i)o.o(i,s)&&(o.m[s]=i[s]);if(l)var u=l(o)}for(r&&r(t);c<a.length;c++)n=a[c],o.o(e,n)&&e[n]&&e[n][0](),e[n]=0;return o.O(u)},t=self.webpackChunkabe_first_block=self.webpackChunkabe_first_block||[];t.forEach(r.bind(null,0)),t.push=r.bind(null,t.push.bind(t))})();var s=o.O(void 0,[431],(()=>o(817)));s=o.O(s)})();