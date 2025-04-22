<?php
class RevenueChartView {
    public function displayChart($data) {
        $labels = json_encode(array_keys($data));
        $revenues = json_encode(array_values($data));
        ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Biểu đồ doanh thu</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 80%; margin: 18%; color:aliceblue">
        <h2>Biểu đồ doanh thu</h2>
        <canvas id="revenueChart"></canvas>
    </div>
    <script>
        const labels = <?php echo $labels; ?>;
        const data = {
            labels: labels,
            datasets: [{
                label: 'Doanh thu (VNĐ)',
                data: <?php echo $revenues; ?>,
                backgroundColor: 'rgba(247, 250, 251, 1)',
                borderColor: 'rgb(255, 255, 255)',
                borderWidth: 1
            }]
        };
        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: '#ffffff' // Màu chữ trục Y (trắng)
                        }
                    },
                    x: {
                        ticks: {
                            color: '#ffffff' // Màu chữ trục X (trắng)
                        }
                    }
                },
                plugins: {
                    legend: {
                        labels: {
                            color: '#ffffff' // Màu chữ của chú thích (trắng)
                        }
                    }
                }
            }
        };
        new Chart(document.getElementById('revenueChart'), config);
    </script>
</body>
</html>
        <?php
    }
}
?>