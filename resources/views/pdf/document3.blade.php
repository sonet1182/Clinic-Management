<html>

<head>
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <div
        style="max-width: 800px;margin: 300px auto;padding: 16px;border: 1px solid #eee;font-size: 16px;line-height: 24px;font-family: 'Inter', sans-serif;color: #555;background-color: #F9FAFC;">
        <table style="font-size: 12px; line-height: 20px;">
            <thead>
                <tr>
                    <td style="padding: 0 16px 18px 16px;">
                        <h1
                            style="color: #1A1C21;font-size: 18px;font-style: normal;font-weight: 600;line-height: normal;">
                            Rupanti Community Clinic and Diagnostic Centre</h1>
                        <p>Nurjahan Shopping Mall, Brahmanbaria</p>
                        <p>01647008413, 01956003527, 01966070708</p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <table
                            style="background-color: #FFF; padding: 20px 16px; border: 1px solid #D7DAE0;width: 100%; border-radius: 12px;font-size: 12px; line-height: 20px; table-layout: fixed;">
                            <tbody>
                                <tr>
                                    <td
                                        style="vertical-align: top; width: 30%; padding-right: 20px;padding-bottom: 35px;">


                                        <table style="table-layout: fixed;width:-webkit-fill-available;">
                                            <tr>
                                                <th style="text-align: left; color: #1A1C21;">ID</th>
                                                <td style="text-align: right;">{{ $receipt_id }}</td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: left; color: #1A1C21;">Name</th>
                                                <td style="text-align: right;">{{ $receipt->pdf_patientName }}</td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: left; color: #1A1C21;">Phone</th>
                                                <td style="text-align: right;">{{ $receipt->pdf_patientPhone }}</td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: left; color: #1A1C21;">Age</th>
                                                <td style="text-align: right;">{{ $receipt->pdf_patientAge ?? '-' }}</td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: left; color: #1A1C21;">Sex</th>
                                                <td style="text-align: right;">{{ $receipt->pdf_patientGender ?? '-' }}
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                    <td
                                        style="vertical-align: top; width: 35%; padding-right: 20px;padding-bottom: 35px;">

                                    </td>
                                    <td style="vertical-align: top;padding-bottom: 35px;">
                                        <table style="table-layout: fixed;width:-webkit-fill-available;">
                                            <tr>
                                                <th style="text-align: left; color: #1A1C21;">Ref. Doctor Name:
                                                </th>
                                                <td style="text-align: right;">{{ $receipt->pdf_doctorName }}</td>
                                            </tr>
                                            <tr>
                                                <th style="text-align: left; color: #1A1C21;">Room Number:</th>
                                                <td style="text-align: right;">{{ $receipt->pdf_doctorRoom }}</td>
                                            </tr>


                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 13px;">
                                        <p style="color: #5E6470;">Patient Type </p>
                                        <p style="font-weight: 700; color: #1A1C21;">{{ $receipt->patient_type }}</p>
                                    </td>
                                    <td style="text-align: center; padding-bottom: 13px;">
                                        <p style="color: #5E6470;">Invoice number</p>
                                        <p style="font-weight: 700; color: #1A1C21;">#AB2324-{{ $receipt_id }}</p>
                                    </td>
                                    <td style="text-align: end; padding-bottom: 13px;">
                                        <p style="color: #5E6470;">Invoice date</p>
                                        <p style="font-weight: 700; color: #1A1C21;">
                                            {{ now()->format('d M, Y') }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <table style="width: 100%;border-spacing: 0;">
                                            <thead>
                                                <tr style="text-transform: uppercase;">
                                                    <td style="padding: 8px 0; border-block:1px solid #D7DAE0;">Name</td>
                                                    <td
                                                        style="padding: 8px 0; border-block:1px solid #D7DAE0; width: 100px;">
                                                        Fee
                                                    </td>
                                                    <td
                                                        style="padding: 8px 0; border-block:1px solid #D7DAE0; text-align: end; width: 100px;">
                                                        Discount</td>
                                                    <td
                                                        style="padding: 8px 0; border-block:1px solid #D7DAE0; text-align: end; width: 120px;">
                                                        Payment</td>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                @foreach (json_decode($receipt->pdf_items, true) as $item)
                                                    <tr>
                                                        <td style="padding-block: 12px;">
                                                            <p style="font-weight: 700; color: #1A1C21;">
                                                                {{ htmlspecialchars($item['name']) }}</p>
                                                        </td>
                                                        <td style="padding-block: 12px;">
                                                            <p style="font-weight: 700; color: #1A1C21;">
                                                                {{ number_format($item['fee'], 2) }}</p>
                                                        </td>
                                                        <td style="padding-block: 12px; text-align: end;">
                                                            <p style="font-weight: 700; color: #1A1C21;">
                                                                {{ $item['totalDiscount'] }} %</p>
                                                        </td>
                                                        <td style="padding-block: 12px; text-align: end;">
                                                            <p style="font-weight: 700; color: #1A1C21;">
                                                                {{ number_format($item['payment'], 2) }} Tk</p>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                           
                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td style="padding: 12px 0; border-top:1px solid #D7DAE0;"></td>
                                                    <td style="border-top:1px solid #D7DAE0;" colspan="3">
                                                        <div class="totals">
                                                            <p><strong>Total Fee:</strong> {{ number_format($receipt->pdf_totalPrice, 2) }} Tk</p>
                                                            <p><strong>Total VAT (15%):</strong> {{ number_format($receipt->pdf_totalVat, 2) }} Tk</p>
                                                            <p><strong>Coupon Discount:</strong> {{ number_format($receipt->pdf_couponDiscount, 2) }} Tk</p>
                                                            <p><strong>Bill:</strong> {{ number_format($receipt->pdf_finalPrice, 2) }} Tk</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p style="color: #1A1C21;">(1) VAT non applicable</p>
                                                        <p style="color: #1A1C21;">(2) Price includes the remuneration
                                                            for
                                                            MealShift Services</p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td style="padding-top: 30px;">
                        <p style="display: flex; gap: 0 13px;"><span style="color: #1A1C21;font-weight: 700;">Nurjahan Shopping Mall, Brahmanbaria</span><span>Registration
                                number:12793366</span></p>
                        <p style="color: #1A1C21;">Any questions, contact customer service at <a
                                href="mailto:support@mealshift.co.uk" style="color: #000;">rupanticlinic@gmail.com</a>.
                        </p>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>
