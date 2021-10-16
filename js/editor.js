(function () {
	// リスト
	wp.blocks.registerBlockStyle("core/list", {
		name: "ul_default",
		label: "茶丸リスト",
	});
    wp.blocks.registerBlockStyle("core/list", {
		name: "ol_default",
		label: "茶数字リスト",
	});

	// 引用
	wp.blocks.registerBlockStyle("core/quote", {
		name: "blockquote_default",
		label: "引用デフォルト",
	});
})();