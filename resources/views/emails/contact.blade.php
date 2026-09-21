<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message - Portfolio</title>
    <style>
        body { font-family: Arial, Helvetica, sans-serif; line-height: 1.6; color: #333; margin: 0; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #3b82f6, #06b6d4); color: white; padding: 20px; border-radius: 10px; }
        .content { background: #f8f9fa; padding: 20px; border-radius: 10px; margin-top: 20px; }
        .info { margin: 10px 0; }
        .label { font-weight: bold; color: #3b82f6; }
        .message { margin: 10px 0 0; padding: 15px; background: white; border-left: 4px solid #3b82f6; white-space: pre-line; }
        .footer { margin-top: 20px; color: #666; font-size: 12px; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 style="margin: 0;">Nouveau message reçu sur le portfolio</h1>
        </div>

        <div class="content">
            <div class="info">
                <span class="label">Nom :</span> {{ $contact->nom }}
            </div>
            <div class="info">
                <span class="label">Email :</span> <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
            </div>
            @if($contact->sujet)
            <div class="info">
                <span class="label">Sujet :</span> {{ $contact->sujet }}
            </div>
            @endif
            <div class="info">
                <span class="label">Message :</span>
                <p class="message">{{ $contact->message }}</p>
            </div>
            <div class="footer">
                Reçu le {{ $contact->created_at?->format('d/m/Y à H:i') }}
            </div>
        </div>
    </div>
</body>
</html>