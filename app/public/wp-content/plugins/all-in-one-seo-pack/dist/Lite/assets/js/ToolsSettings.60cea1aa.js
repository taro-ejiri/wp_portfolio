var f=Object.defineProperty,m=Object.defineProperties;var v=Object.getOwnPropertyDescriptors;var l=Object.getOwnPropertySymbols;var _=Object.prototype.hasOwnProperty,S=Object.prototype.propertyIsEnumerable;var u=(s,e,t)=>e in s?f(s,e,{enumerable:!0,configurable:!0,writable:!0,value:t}):s[e]=t,i=(s,e)=>{for(var t in e||(e={}))_.call(e,t)&&u(s,t,e[t]);if(l)for(var t of l(e))S.call(e,t)&&u(s,t,e[t]);return s},a=(s,e)=>m(s,v(e));import{Q as o,R as g,f as $,d as h}from"./index.aff2f9f0.js";const b={computed:a(i({},o(["isUnlicensed"])),{shouldShowMain(){return!this.isUnlicensed&&this.$addons.isActive(this.addonSlug)&&!this.$addons.requiresUpgrade(this.addonSlug)&&this.$addons.hasMinimumVersion(this.addonSlug)},shouldShowActivate(){return!this.isUnlicensed&&!this.$addons.isActive(this.addonSlug)&&this.$addons.canActivate(this.addonSlug)&&!this.$addons.requiresUpgrade(this.addonSlug)&&(this.$addons.hasMinimumVersion(this.addonSlug)||!this.$addons.isInstalled(this.addonSlug))},shouldShowUpdate(){return!this.isUnlicensed&&this.$addons.isInstalled(this.addonSlug)&&!this.$addons.requiresUpgrade(this.addonSlug)&&!this.$addons.hasMinimumVersion(this.addonSlug)},shouldShowLite(){return this.isUnlicensed||this.$addons.requiresUpgrade(this.addonSlug)}})},U={data(){return{strings:{notifications:"Notifications",newNotifications:"New Notifications",activeNotifications:"Active Notifications"}}},computed:a(i({},o(["activeNotifications","activeNotificationsCount","dismissedNotifications","dismissedNotificationsCount"])),{notificationsCount(){return this.dismissed?this.dismissedNotificationsCount:this.activeNotificationsCount},notifications(){return this.dismissed?this.dismissedNotifications:this.activeNotifications},notificationTitle(){return this.dismissed?this.strings.notifications:this.strings.newNotifications}}),methods:i({},g(["toggleDismissedNotifications","toggleNotifications"]))},N={methods:a(i({},$(["saveChanges","saveHtaccess"])),{processSaveChanges(){this.$store.commit("loading",!0);let s=!1,e=!1,t="saveChanges";setTimeout(()=>{s=!0,e&&this.$store.commit("loading",!1)},1500),this.$store.state.route.name==="htaccess-editor"&&(t="saveHtaccess",this.$store.commit("setHtaccessError",null)),this[t]().then(n=>{n&&n.body.redirection||(s||this.$store.state.route.name==="htaccess-editor"?this.$store.commit("loading",!1):e=!0,this.$bus.$emit("changes-saved"))})}})},R={computed:i(i({},h(["currentPost","tags"])),h("live-tags",["liveTags"])),methods:{truncate(s,e=200){return s&&(e<s.length?s.substr(0,e-1)+this.$tags.decodeHTMLEntities("&hellip;"):s)},parseTags(s){return!s||!this.tags.tags?s:(this.tags.tags.forEach(e=>{if(e.id==="custom_field"||e.id==="tax_name"){const c=new RegExp(`#${e.id}-([a-zA-Z0-9_-]+)`,"g");s=s.replace(c,`[${e.name} - $1]`);return}const t=new RegExp(`#${e.id}(?![a-zA-Z0-9_])`,"g");e.id==="separator_sa"&&this.separator!==void 0&&(s=s.replace(t,this.separator));const n=s.match(t),r=this.liveTags[e.id]||e.value;n&&(s=s.replace(t,"%|%"+r)),this.$set(e,"value",r);const{tags:p}=window.aioseo.tags,d=p.find(c=>c.id===e.id);d&&this.$set(d,"value",r)}),s=s.replace(/%\|%/g,""),this.$tags.decodeHTMLEntities(this.$tags.decodeHTMLEntities(s.replace(/<(?:.|\n)*?>/gm," ").replace(/\s/g," "))))}}},k={data(){return{strings:{skipThisStep:"Skip this Step",goBack:"Go Back",saveAndContinue:"Save and Continue"}}},computed:a(i(i({},o("wizard",["getNextLink","getPrevLink"])),o(["isUnlicensed"])),{features(){return[...this.$constants.WIZARD_FEATURES]},getSelectedUpsellFeatures(){return this.presetFeatures.filter(s=>this.needsUpsell(this.features.find(e=>e.value===s))).map(s=>this.features.find(e=>e.value===s))}}),methods:a(i({},g("wizard",["setCurrentStage"])),{needsUpsell(s){return s.pro?!!(this.isUnlicensed||s.upgrade&&this.$addons.requiresUpgrade(s.upgrade)):!1}}),mounted(){this.setCurrentStage(this.stage)}},C={computed:a(i({},o(["isUnlicensed"])),{toolsSettings(){const s=[{value:"webmasterTools",label:"Webmaster Tools",access:"aioseo_general_settings"},{value:"rssContent",label:"RSS Content",access:"aioseo_general_settings"},{value:"advanced",label:"Advanced",access:"aioseo_general_settings"},{value:"searchAppearance",label:"Search Appearance",access:"aioseo_search_appearance_settings"},{value:"social",label:"Social Networks",access:"aioseo_social_networks_settings"},{value:"sitemap",label:"Sitemaps",access:"aioseo_sitemap_settings"},{value:"robots",label:"Robots.txt",access:"aioseo_tools_settings"},{value:"breadcrumbs",label:"Breadcrumbs",access:"aioseo_general_settings"}];return window.aioseo.internalOptions.internal.deprecatedOptions.includes("badBotBlocker")&&s.push({value:"blocker",label:"Bad Bot Blocker",access:"aioseo_tools_settings"}),this.$isPro&&s.push({value:"accessControl",label:"Access Control",access:"aioseo_admin"}),!this.isUnlicensed&&this.showImageSeoReset&&s.push({value:"image",label:"Image SEO",access:"aioseo_search_appearance_settings"}),!this.isUnlicensed&&this.showLocalBusinessReset&&s.push({value:"localBusiness",label:"Local Business SEO",access:"aioseo_local_seo_settings"}),!this.isUnlicensed&&this.showRedirectsReset&&s.push({value:"redirects",label:"Redirects",access:"aioseo_redirects_settings"}),!this.isUnlicensed&&this.showLinkAssistantReset&&s.push({value:"linkAssistant",label:"Link Assistant",access:"aioseo_link_assistant_settings"}),s.filter(e=>this.$allowed(e.access))},showImageSeoReset(){const s=this.$addons.getAddon("aioseo-image-seo");return s&&s.isActive&&!s.requiresUpgrade},showLocalBusinessReset(){const s=this.$addons.getAddon("aioseo-local-business");return s&&s.isActive&&!s.requiresUpgrade},showRedirectsReset(){const s=this.$addons.getAddon("aioseo-redirects");return s&&s.isActive&&!s.requiresUpgrade},showLinkAssistantReset(){const s=this.$addons.getAddon("aioseo-link-assistant");return s&&s.isActive&&!s.requiresUpgrade}})};export{b as A,U as N,N as S,R as T,k as W,C as a};
