<template>
    <div class="faq-container">
        <div class="faq-question" v-on:click="toggle(index)" v-for="(item, index) in contents">
            <div class="faq-description">{{item.title}}<span>&#9656;</span></div>
            <div class="faq-content">
                <p>{{item.msg}}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'accordion-list',
        data() {
            return {
                contents: this.$root.getContent('faqList'),
            }
        },
        methods: {
            toggle: function (num) {
                if (this.$el.children[num].classList.contains('open')) {
                    this.$el.children[num].classList.remove('open')
                } else {
                    var prevFaqQuestion = this.$el.querySelectorAll('.open')
                    if (prevFaqQuestion.length !== 0) {
                        prevFaqQuestion[0].classList.remove('open')
                    }
                    this.$el.children[num].classList.add('open')
                }
            },
        },
    }
</script>

<style lang="scss" scoped>

    @import "../../scss/variables/colors";
    @import "../../scss/variables/grid";

    .faq {
        &-container {
            width: 100%;
        }
        &-question {
            padding: 0;
            transition: all 0.3s;
        }
        &-description {
            font-size: 18px;
            cursor: pointer;
            padding: 8px 0;
            @media(max-width: $media-point-5) {
                font-size: 14px;
            }
            span {
                margin-left: 35px;
                color: $color-primary;
                display: inline-block;
                transition: all 0.3s;
            }
        }
        &-content {
            font-size: 14px;
            display:block;
            height:auto;
            max-width: 450px;
            max-height:0;
            padding-left: 2px;
            transform: scaleY(0);
            transform-origin: top;
            transition: max-height 0.2s, transform 0.2s;
            p {
                margin: 0;
                padding: 10px 0 25px;
            }
        }
        &-question.open {
            .faq-description span:last-child {
                transform: rotate(90deg);
            }
            .faq-content {
                max-height:1000px;
                transform: scaleY(1);
            }
        }
    }
</style>
