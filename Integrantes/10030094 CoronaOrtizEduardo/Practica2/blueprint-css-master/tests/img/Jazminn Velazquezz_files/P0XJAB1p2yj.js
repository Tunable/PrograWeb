/*!CK:249400046!*//*1379008741,173205831*/

if (self.CavalryLogger) { CavalryLogger.start_js(["nZpZ9"]); }

__d("Badge.react",["BadgeHelper","React","ReactPropTypes"],function(a,b,c,d,e,f){var g=b('BadgeHelper'),h=b('React'),i=b('ReactPropTypes'),j=h.createClass({displayName:'Badge',propTypes:{size:i.string,type:i.string},render:function(){var k=g.getClasses(this.props.size,this.props.type);return (h.DOM.span({className:k}));}});e.exports=j;});