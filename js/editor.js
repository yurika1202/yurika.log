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
	wp.blocks.registerBlockStyle("core/list", {
		name: "step_default",
		label: "ステップ",
	});

	// 引用
	wp.blocks.registerBlockStyle("core/quote", {
		name: "blockquote_default",
		label: "引用デフォルト",
	});

    // ボタン
    wp.blocks.registerBlockStyle("core/buttons", {
		name: "btn_flex_left",
		label: "ボタン横並び左",
	});
    wp.blocks.registerBlockStyle("core/buttons", {
		name: "btn_flex_center",
		label: "ボタン横並び中央",
	});
    wp.blocks.registerBlockStyle("core/button", {
		name: "btn_default",
		label: "ボタンデフォルト",
	});
    wp.blocks.registerBlockStyle("core/button", {
		name: "btn_outline",
		label: "ボタンアウトライン",
	});
})();