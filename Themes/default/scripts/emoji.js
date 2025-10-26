$(document).ready(function () {
    /*Some links are broken at a source end*/
    const forbiddenLinks = [862, 863, 864, 865, 980, 866, 1283, 1285, 1298, 1299, 1297, 1535, 1300];
    const tabsData = [
        {
            group: 'people and faces and gestures',
            ranges: [
                {start: 1, end: 189},
                {start: 846, end: 872},
                {start: 1284, end: 1450},
                {start: 1457, end: 1507},
                {start: 1514, end: 1564},
                {start: 1586, end: 1621},
            ]
        },
        {
            group: 'animals and nature and weather',
            ranges: [
                {start: 190, end: 306},
                {start: 881, end: 891},
                {start: 938, end: 952}
            ]
        },
        {
            group: 'objects',
            ranges: [
                {start: 307, end: 450},
                {start: 930, end: 937},
                {start: 981, end: 1020},
            ]
        },
        {
            group: 'games and sports',
            ranges: [
                {start: 451, end: 476},
                {start: 959, end: 973},
                {start: 1451, end: 1456},
                {start: 1508, end: 1513},
                {start: 1565, end: 1585},
            ]
        },
        {
            group: 'food and drink',
            ranges: [
                {start: 477, end: 535},
                {start: 892, end: 900},
            ]
        },
        {
            group: 'building and transport',
            ranges: [
                {start: 536, end: 626},
                {start: 901, end: 929},
            ]
        },
        {
            group: 'flags',
            ranges: [
                {start: 627, end: 636},
                {start: 1021, end: 1269},
            ]
        },
        {
            group: 'numbers and symbols',
            ranges: [
                {start: 637, end: 845},
                {start: 953, end: 958},
                {start: 974, end: 979},
                {start: 1270, end: 1282},
            ]
        },

    ];

    /*Plugin for inserting text at textarea caret*/
    $.fn.insertAtCaret = function (myValue) {
        return this.each(function () {
            let me = this;
            if (document.selection) { // IE
                me.focus();
                sel = document.selection.createRange();
                sel.text = myValue;
                me.focus();
            } else if (me.selectionStart || me.selectionStart == '0') { // Real browsers
                let startPos = me.selectionStart, endPos = me.selectionEnd, scrollTop = me.scrollTop;
                me.value = me.value.substring(0, startPos) + myValue + me.value.substring(endPos, me.value.length);
                me.focus();
                me.selectionStart = startPos + myValue.length;
                me.selectionEnd = startPos + myValue.length;
                me.scrollTop = scrollTop;
            } else {
                me.value += myValue;
                me.focus();
            }
        });
    };

    function fillArray(filled, start, end) {
        for (let i = start; i <= end; i++) {
            filled.push(i);
        }
        return filled;
    }

    function setUpTabHtml(html, index) {
        $('.emoji-tab').eq(index).html(html);
    }

    function loadTab(i) {
        let filledTabs = [];
        let tabHtml = '';
        for (let j = 0; j < tabsData[i].ranges.length; j++) {
            filledTabs = fillArray(filledTabs, tabsData[i].ranges[j].start, tabsData[i].ranges[j].end);
        }

        for (let k = 0; k < filledTabs.length; k++) {
            if (forbiddenLinks.indexOf(filledTabs[k]) < 0)
                tabHtml += '<div class="emoji-icon" data-emoji-code="[emoji' + filledTabs[k] + ']"><img alt="" src="https://emoji.tapatalk-cdn.com/emoji' + filledTabs[k] + '.png" /></div>';
        }
        setUpTabHtml(tabHtml, i);
    }

    function appendEmoji(emojiCode) {
		emojiCode2 = emojiCode;
		emojiCode2 = emojiCode2.replace('[','');
		emojiCode2 = emojiCode2.replace(']','');
        oEditorHandle_message.insertImage('https://emoji.tapatalk-cdn.com/' + emojiCode2 + '.png');
        $("#message").insertAtCaret('' + emojiCode + '');
    }

    /*Events*/
    $(document).on('click', '.emoji-icon', function () {
        const emojiCode = $(this).attr('data-emoji-code');
        appendEmoji(emojiCode);
        $('.emoji-container-wrapper').removeClass('open');
    });

    $(document).on('click', '.emoji-category img', function () {
        const tabId = $(this).attr('data-tab-id');
        loadTab(tabId);

        $('.emoji-category.open').removeClass('open');
        $(this).parent().addClass('open');
        $('.emoji-tab.open').removeClass('open');
        $('.emoji-tab').eq($(this).attr('data-tab-id')).addClass('open');
    });

    let firstTabLoaded = false;
    $('.emoji-btn').click(function () {
        if(!firstTabLoaded){
            /*Init*/
            loadTab(0);
            firstTabLoaded = true;
        }
        $(".emoji-container-wrapper").toggleClass('open');
    });


});