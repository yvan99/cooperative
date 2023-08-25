<template>
    <highcharts :options="chartOptions"></highcharts>
</template>
<script>
    import { Chart } from 'highcharts-vue'

    export default {
        props: ['entries', 'title'],
        components: {
            highcharts: Chart
        },
        data() {
            return {
                chartOptions: {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: this.title,
                        align: 'left'
                    },
                    series: [{
                        name: 'Share',
                        data: this.entries
                    }]
                }
            }
        }
    }
</script>
